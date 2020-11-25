<?php

namespace App\Controller;

use App\Controller\AppController;

/**
 * Orders Controller
 *
 * @property \App\Model\Table\OrdersTable $Orders
 *
 * @method \App\Model\Entity\Order[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class OrdersController extends AppController {

    public function initialize() {
        parent::initialize();
        $this->Auth->allow(['add']);
        $this->viewBuilder()->setLayout('cakephp_default');

    }

    public function isAuthorized($user) {
        return true;
    }

    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index() {
        $this->paginate = [
            'contain' => ['Companies'],
        ];
        $orders = $this->paginate($this->Orders);

        $this->set(compact('orders'));
    }

    /**
     * View method
     *
     * @param string|null $id Order id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null) {
        $order = $this->Orders->get($id, [
            'contain' => ['Companies'],
        ]);

        $this->set('order', $order);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add() {
       /** if ($this->request->session()->read('Companie.id') == false) {
            $this->Flash->error(__('Order must be added from an companie'));
            return $this->redirect(['controller' => 'companies', 'action' => 'index']);
        } else {
            $order = $this->Orders->newEntity();
            if ($this->request->is('post')) {
                $order = $this->Orders->patchEntity($order, $this->request->getData());
                $order->companie_id = $this->request->session()->read('Companie.id');
                $this->request->session()->delete('Companie.id');
      //      debug($order); die();
                if ($this->Orders->save($order)) {
                    $this->Flash->success(__('The order has been saved.'));
                    $companie_slug = $this->request->session()->read('Companie.slug');
                   return $this->redirect(['controller' => 'companies', 'action' => 'view', $companie_slug]);
                }
                $this->Flash->error(__('The order could not be saved. Please, try again.'));
            }
            $companies = $this->Orders->Companies->find('list', ['limit' => 200]);
            $this->set(compact('order', 'companies'));
        }*/
        if ($this->request->session()->read('Companie.id') == false) {
            $this->Flash->error(__('Order must be added from an companie'));
            return $this->redirect(['controller' => 'companies', 'action' => 'index']);
        } else {
           $order = $this->Orders->newEntity();
        if ($this->request->is('post')) {
            $order = $this->Orders->patchEntity($order, $this->request->getData());
            if ($this->Orders->save($order)) {
                $this->Flash->success(__('The delivery has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The delivery could not be saved. Please, try again.'));
        }
        $companies = $this->Orders->Companies->find('list', ['limit' => 200]);
        $this->set(compact('order', 'companies'));
        }
    }

    /**
     * Edit method
     *
     * @param string|null $id Order id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null) {
        $order = $this->Orders->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $order = $this->Orders->patchEntity($order, $this->request->getData());
            if ($this->Orders->save($order)) {
                $this->Flash->success(__('The order has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The order could not be saved. Please, try again.'));
        }
        $companies = $this->Orders->Companies->find('list', ['limit' => 200]);
        $this->set(compact('order', 'companies'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Order id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null) {
        $this->request->allowMethod(['post', 'delete']);
        $order = $this->Orders->get($id);
        if ($this->Orders->delete($order)) {
            $this->Flash->success(__('The order has been deleted.'));
        } else {
            $this->Flash->error(__('The order could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }

}
