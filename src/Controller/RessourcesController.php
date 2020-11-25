<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Ressources Controller
 *
 * @property \App\Model\Table\RessourcesTable $Ressources
 *
 * @method \App\Model\Entity\Ressource[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class RessourcesController extends AppController
{
    
     public function initialize() {
        parent::initialize();
        $this->Auth->allow(['findRessources', 'add', 'edit', 'delete']);
        $this->viewBuilder()->setLayout('cakephp_default');

    }

    public function findRessources() {

        if ($this->request->is('ajax')) {

            $this->autoRender = false;
            $name = $this->request->query['term'];
            $results = $this->Ressources->find('all', array(
                'conditions' => array('Ressources.name LIKE ' => '%' . $name . '%')
            ));

            $resultArr = array();
            foreach ($results as $result) {
                $resultArr[] = array('label' => $result['name'], 'value' => $result['id']);
            }
            echo json_encode($resultArr);
        }
    }
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Commandes', 'Villes'],
        ];
        $ressources = $this->paginate($this->Ressources);

        $this->set(compact('ressources'));
    }

    /**
     * View method
     *
     * @param string|null $id Ressource id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $ressource = $this->Ressources->get($id, [
            'contain' => ['Commandes', 'Villes', 'Companies'],
        ]);

        $this->set('ressource', $ressource);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $ressource = $this->Ressources->newEntity();
        if ($this->request->is('post')) {
            $ressource = $this->Ressources->patchEntity($ressource, $this->request->getData());
            if ($this->Ressources->save($ressource)) {
                $this->Flash->success(__('The ressource has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The ressource could not be saved. Please, try again.'));
        }
        $commandes = $this->Ressources->Commandes->find('list', ['limit' => 200]);
        $villes = $this->Ressources->Villes->find('list', ['limit' => 200]);
        $this->set(compact('ressource', 'commandes', 'villes'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Ressource id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $ressource = $this->Ressources->get($id, [
            'contain' => ['Commandes','Villes'],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $ressource = $this->Ressources->patchEntity($ressource, $this->request->getData());
            if ($this->Ressources->save($ressource)) {
                $this->Flash->success(__('The ressource has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The ressource could not be saved. Please, try again.'));
        }
        $commandes = $this->Ressources->Commandes->find('list', ['limit' => 200]);
        $villes = $this->Ressources->Villes->find('list', ['limit' => 200]);
        $this->set(compact('ressource', 'commandes', 'villes'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Ressource id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $ressource = $this->Ressources->get($id);
        if ($this->Ressources->delete($ressource)) {
            $this->Flash->success(__('The ressource has been deleted.'));
        } else {
            $this->Flash->error(__('The ressource could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
