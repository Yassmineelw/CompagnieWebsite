<?php
namespace App\Controller;

use App\Controller\AppController;

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
        $this->Auth->allow(['getByCommande'/**, 'add', 'edit', 'delete'*/]);
        $this->viewBuilder()->setLayout('cakephp_default');

    }
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    
    public function index()
    {
        $this->viewBuilder()->setLayout('commandesSpa');
        $commandes = $this->Commandes->find('all');
        $this->set(compact('commandes'));
    }

 
}
