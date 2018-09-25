<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * RoleUser Controller
 *
 * @property \App\Model\Table\RoleUserTable $RoleUser
 *
 * @method \App\Model\Entity\RoleUser[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class RoleUserController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Role', 'Users']
        ];
        $roleUser = $this->paginate($this->RoleUser);

        $this->set(compact('roleUser'));
    }

    /**
     * View method
     *
     * @param string|null $id Role User id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $roleUser = $this->RoleUser->get($id, [
            'contain' => ['Role', 'Users']
        ]);

        $this->set('roleUser', $roleUser);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $roleUser = $this->RoleUser->newEntity();
        if ($this->request->is('post')) {
            $roleUser = $this->RoleUser->patchEntity($roleUser, $this->request->getData());
            if ($this->RoleUser->save($roleUser)) {
                $this->Flash->success(__('The role user has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The role user could not be saved. Please, try again.'));
        }
        $role = $this->RoleUser->Role->find('list', ['limit' => 200]);
        $users = $this->RoleUser->Users->find('list', ['limit' => 200]);
        $this->set(compact('roleUser', 'role', 'users'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Role User id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $roleUser = $this->RoleUser->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $roleUser = $this->RoleUser->patchEntity($roleUser, $this->request->getData());
            if ($this->RoleUser->save($roleUser)) {
                $this->Flash->success(__('The role user has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The role user could not be saved. Please, try again.'));
        }
        $role = $this->RoleUser->Role->find('list', ['limit' => 200]);
        $users = $this->RoleUser->Users->find('list', ['limit' => 200]);
        $this->set(compact('roleUser', 'role', 'users'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Role User id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $roleUser = $this->RoleUser->get($id);
        if ($this->RoleUser->delete($roleUser)) {
            $this->Flash->success(__('The role user has been deleted.'));
        } else {
            $this->Flash->error(__('The role user could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
