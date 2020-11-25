<?php
namespace App\Controller\Admin;

use App\Controller\Admin\AppController;

/**
 * Commandes Controller
 *
 * @property \App\Model\Table\CommandesTable $Commandes
 *
 * @method \App\Model\Entity\Commande[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class CommandesController extends AppController
{
    
       public function initialize() {
        parent::initialize();
    }

    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $commandes = $this->paginate($this->Commandes);

        $this->set(compact('commandes'));
    }

    /**
     * View method
     *
     * @param string|null $id Commande id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $commande = $this->Commandes->get($id, [
            'contain' => ['Ressources', 'Villes'],
        ]);

        $this->set('commande', $commande);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $commande = $this->Commandes->newEntity();
        if ($this->request->is('post')) {
            $commande = $this->Commandes->patchEntity($commande, $this->request->getData());
            if ($this->Commandes->save($commande)) {
                $this->Flash->success(__('The commande has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The commande could not be saved. Please, try again.'));
        }
        $this->set(compact('commande'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Commande id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $commande = $this->Commandes->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $commande = $this->Commandes->patchEntity($commande, $this->request->getData());
            if ($this->Commandes->save($commande)) {
                $this->Flash->success(__('The commande has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The commande could not be saved. Please, try again.'));
        }
        $this->set(compact('commande'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Commande id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $commande = $this->Commandes->get($id);
        if ($this->Commandes->delete($commande)) {
            $this->Flash->success(__('The commande has been deleted.'));
        } else {
            $this->Flash->error(__('The commande could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
