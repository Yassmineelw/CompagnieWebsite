<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Villes Controller
 *
 * @property \App\Model\Table\VillesTable $Villes
 *
 * @method \App\Model\Entity\Ville[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class VillesController extends AppController
{
       public function initialize() {
        parent::initialize();
        $this->Auth->allow(['getByCommande', 'add', 'edit', 'delete']);
        $this->viewBuilder()->setLayout('cakephp_default');

    }

    
    public function getByCommande() {
        $commande_id = $this->request->query('commande_id');

        $villes = $this->Villes->find('all', [
            'conditions' => ['Villes.commande_id' => $commande_id],
        ]);
        $this->set('villes', $villes);
        $this->set('_serialize', ['villes']);
    }
    
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Commandes'],
        ];
        $villes = $this->paginate($this->Villes);

        $this->set(compact('villes'));
    }

    /**
     * View method
     *
     * @param string|null $id Ville id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $ville = $this->Villes->get($id, [
            'contain' => ['Commandes', 'Ressources'],
        ]);

        $this->set('ville', $ville);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $ville = $this->Villes->newEntity();
        if ($this->request->is('post')) {
            $ville = $this->Villes->patchEntity($ville, $this->request->getData());
            if ($this->Villes->save($ville)) {
                $this->Flash->success(__('The ville has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The ville could not be saved. Please, try again.'));
        }
        $commandes = $this->Villes->Commandes->find('list', ['limit' => 200]);
        $this->set(compact('ville', 'commandes'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Ville id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $ville = $this->Villes->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $ville = $this->Villes->patchEntity($ville, $this->request->getData());
            if ($this->Villes->save($ville)) {
                $this->Flash->success(__('The ville has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The ville could not be saved. Please, try again.'));
        }
        $commandes = $this->Villes->Commandes->find('list', ['limit' => 200]);
        $this->set(compact('ville', 'commandes'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Ville id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $ville = $this->Villes->get($id);
        if ($this->Villes->delete($ville)) {
            $this->Flash->success(__('The ville has been deleted.'));
        } else {
            $this->Flash->error(__('The ville could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
