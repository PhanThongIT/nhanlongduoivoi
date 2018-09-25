<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * BillDetail Controller
 *
 *
 * @method \App\Model\Entity\BillDetail[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class BillDetailController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $billDetail = $this->paginate($this->BillDetail);

        $this->set(compact('billDetail'));
    }

    /**
     * View method
     *
     * @param string|null $id Bill Detail id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $billDetail = $this->BillDetail->get($id, [
            'contain' => []
        ]);

        $this->set('billDetail', $billDetail);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $billDetail = $this->BillDetail->newEntity();
        if ($this->request->is('post')) {
            $billDetail = $this->BillDetail->patchEntity($billDetail, $this->request->getData());
            if ($this->BillDetail->save($billDetail)) {
                $this->Flash->success(__('The bill detail has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The bill detail could not be saved. Please, try again.'));
        }
        $this->set(compact('billDetail'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Bill Detail id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $billDetail = $this->BillDetail->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $billDetail = $this->BillDetail->patchEntity($billDetail, $this->request->getData());
            if ($this->BillDetail->save($billDetail)) {
                $this->Flash->success(__('The bill detail has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The bill detail could not be saved. Please, try again.'));
        }
        $this->set(compact('billDetail'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Bill Detail id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $billDetail = $this->BillDetail->get($id);
        if ($this->BillDetail->delete($billDetail)) {
            $this->Flash->success(__('The bill detail has been deleted.'));
        } else {
            $this->Flash->error(__('The bill detail could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
