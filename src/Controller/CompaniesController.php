<?php

namespace App\Controller;

use App\Controller\AppController;

/**
 * Companies Controller
 *
 * @property \App\Model\Table\CompaniesTable $Companies
 *
 * @method \App\Model\Entity\Companie[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class CompaniesController extends AppController {

    public function initialize() {
        parent::initialize();
        $this->Auth->allow(['tags']);
        $this->viewBuilder()->setLayout('cakephp_default');

    }

    public function isAuthorized($user) {
        $action = $this->request->getParam('action');
        // The add and tags actions are always allowed to logged in users.
        if (in_array($action, ['add', 'tags'])) {
            return true;
        }

        // All other actions require a slug.
        $slug = $this->request->getParam('pass.0');
        if (!$slug) {
            return false;
        }

        // Check that the companie belongs to the current user.
        $companie = $this->Companies->findBySlug($slug)->first();

        return $companie->user_id === $user['id'];
    }

    public function tags(...$tags) {
        // Use the CompaniesTable to find tagged companies.
        $companies = $this->Companies->find('tagged', [
            'tags' => $tags
        ]);

        // Pass variables into the view template context.
        $this->set([
            'companies' => $companies,
            'tags' => $tags
        ]);
    }

    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index() {
        $this->paginate = [
            'contain' => ['Users', 'Tags', 'Files'],
        ];
        $companies = $this->paginate($this->Companies);

        $this->set(compact('companies'));
    }

    /**
     * View method
     *
     * @param string|null $id Companie id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($slug = null) {
        $companie = $this->Companies->find()
                ->where(['Companies.slug' => $slug])
                ->contain(['Users','Orders', 'Tags', 'Files','Ressources'])
                ->firstOrFail();

        $this->set('companie', $companie);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add() {
        $companie = $this->Companies->newEntity();
        if ($this->request->is('post')) {
            $companie = $this->Companies->patchEntity($companie, $this->request->getData());
            $companie->user_id = $this->Auth->user('id');
//            debug($companie); die();
            if ($this->Companies->save($companie)) {
                $this->Flash->success(__('The companie has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The companie could not be saved. Please, try again.'));
        }
        $files = $this->Companies->Files->find('list', ['limit' => 200]);
        $tags = $this->Companies->Tags->find('list', ['limit' => 200]);
        $this->set(compact('companie', 'tags', 'files'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Companie id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($slug = null) {
        $companie = $this->Companies->findBySlug($slug)
                ->contain('Tags', 'Files','Ressources')
                ->firstOrFail();
        if ($this->request->is(['patch', 'post', 'put'])) {
            $companie = $this->Companies->patchEntity($companie, $this->request->getData(), [
                // Added: Disable modification of user_id.
                'accessibleFields' => ['user_id' => false]
            ]);
            if ($this->Companies->save($companie)) {
                $this->Flash->success(__('The companie has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The companie could not be saved. Please, try again.'));
        }
        $ressources = $this->Companies->Ressources->find('list', ['limit' => 200]);
        $files = $this->Companies->Files->find('list', ['limit' => 200]);
        $tags = $this->Companies->Tags->find('list', ['limit' => 200]);
        $this->set(compact('companie', 'tags', 'files', 'ressources'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Companie id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($slug = null) {
        $this->request->allowMethod(['post', 'delete']);
        $companie = $this->Companies->findBySlug($slug)->firstOrFail();
        if ($this->Companies->delete($companie)) {
            $this->Flash->success(__('The companie has been deleted.'));
        } else {
            $this->Flash->error(__('The companie could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }

}
