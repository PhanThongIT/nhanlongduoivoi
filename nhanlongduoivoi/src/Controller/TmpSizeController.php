<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * TmpSize Controller
 *
 *
 * @method \App\Model\Entity\TmpSize[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class TmpSizeController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $tmpSize = $this->paginate($this->TmpSize);

        $this->set(compact('tmpSize'));
    }

    /**
     * View method
     *
     * @param string|null $id Tmp Size id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $tmpSize = $this->TmpSize->get($id, [
            'contain' => []
        ]);

        $this->set('tmpSize', $tmpSize);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $tmpSize = $this->TmpSize->newEntity();
        if ($this->request->is('post')) {
            $tmpSize = $this->TmpSize->patchEntity($tmpSize, $this->request->getData());
            if ($this->TmpSize->save($tmpSize)) {
                $this->Flash->success(__('The tmp size has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The tmp size could not be saved. Please, try again.'));
        }
        $this->set(compact('tmpSize'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Tmp Size id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $tmpSize = $this->TmpSize->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $tmpSize = $this->TmpSize->patchEntity($tmpSize, $this->request->getData());
            if ($this->TmpSize->save($tmpSize)) {
                $this->Flash->success(__('The tmp size has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The tmp size could not be saved. Please, try again.'));
        }
        $this->set(compact('tmpSize'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Tmp Size id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $tmpSize = $this->TmpSize->get($id);
        if ($this->TmpSize->delete($tmpSize)) {
            $this->Flash->success(__('The tmp size has been deleted.'));
        } else {
            $this->Flash->error(__('The tmp size could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
