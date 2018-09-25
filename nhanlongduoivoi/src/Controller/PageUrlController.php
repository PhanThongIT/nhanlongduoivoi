<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * PageUrl Controller
 *
 * @property \App\Model\Table\PageUrlTable $PageUrl
 *
 * @method \App\Model\Entity\PageUrl[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class PageUrlController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $pageUrl = $this->paginate($this->PageUrl);

        $this->set(compact('pageUrl'));
    }

    /**
     * View method
     *
     * @param string|null $id Page Url id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $pageUrl = $this->PageUrl->get($id, [
            'contain' => ['Categories', 'Products']
        ]);

        $this->set('pageUrl', $pageUrl);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $pageUrl = $this->PageUrl->newEntity();
        if ($this->request->is('post')) {
            $pageUrl = $this->PageUrl->patchEntity($pageUrl, $this->request->getData());
            if ($this->PageUrl->save($pageUrl)) {
                $this->Flash->success(__('The page url has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The page url could not be saved. Please, try again.'));
        }
        $this->set(compact('pageUrl'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Page Url id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $pageUrl = $this->PageUrl->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $pageUrl = $this->PageUrl->patchEntity($pageUrl, $this->request->getData());
            if ($this->PageUrl->save($pageUrl)) {
                $this->Flash->success(__('The page url has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The page url could not be saved. Please, try again.'));
        }
        $this->set(compact('pageUrl'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Page Url id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $pageUrl = $this->PageUrl->get($id);
        if ($this->PageUrl->delete($pageUrl)) {
            $this->Flash->success(__('The page url has been deleted.'));
        } else {
            $this->Flash->error(__('The page url could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
