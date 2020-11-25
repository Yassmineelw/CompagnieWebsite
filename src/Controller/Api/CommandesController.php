<?php

namespace App\Controller\Api;

use App\Controller\Api\AppController;

/**
 * Commandes Controller
 *
 * @property \App\Model\Table\CommandesTable $Commandes
 *
 * @method \App\Model\Entity\Commande[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class CommandesController extends AppController {

    public function initialize()
    {
        parent::initialize();
        $this->loadComponent('RequestHandler');
    }

    public function index()
    {
        $commandes = $this->Commandes->find('all');
        $this->set([
            'commandes' => $commandes,
            '_serialize' => ['commandes']
        ]);
    }

    public function view($id)
    {
        $commande = $this->Commandes->get($id);
        $this->set([
            'commande' => $commande,
            '_serialize' => ['commande']
        ]);
    }

    public function add()
    {
        $this->request->allowMethod(['post', 'put']);
        $commande = $this->Commandes->newEntity($this->request->getData());
        if ($this->Commandes->save($commande)) {
            $message = 'Saved';
        } else {
            $message = 'Error';
        }
        $this->set([
            'message' => $message,
            'commande' => $commande,
            '_serialize' => ['message', 'commande']
        ]);
    }

    public function edit($id)
    {
        $this->request->allowMethod(['patch', 'post', 'put']);
        $commande = $this->Commandes->get($id);
        $commande = $this->Commandes->patchEntity($commande, $this->request->getData());
        if ($this->Commandes->save($commande)) {
            $message = 'Saved';
        } else {
            $message = 'Error';
        }
        $this->set([
            'message' => $message,
            '_serialize' => ['message']
        ]);
    }

    public function delete($id)
    {
        $this->request->allowMethod(['delete']);
        $commande = $this->Commandes->get($id);
        $message = 'Deleted';
        if (!$this->Commandes->delete($commande)) {
            $message = 'Error';
        }
        $this->set([
            'message' => $message,
            '_serialize' => ['message']
        ]);
    }


}
