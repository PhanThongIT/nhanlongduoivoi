<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Slide Controller
 *
 * @property \App\Model\Table\SlideTable $Slide
 *
 * @method \App\Model\Entity\Slide[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class SlideController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $slide = $this->paginate($this->Slide);

        $this->set(compact('slide'));
    }

    /**
     * View method
     *
     * @param string|null $id Slide id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $slide = $this->Slide->get($id, [
            'contain' => []
        ]);

        $this->set('slide', $slide);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $slide = $this->Slide->newEntity();
        if ($this->request->is('post')) {
            $slide = $this->Slide->patchEntity($slide, $this->request->getData());
            if ($this->Slide->save($slide)) {
                $this->Flash->success(__('The slide has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The slide could not be saved. Please, try again.'));
        }
        $this->set(compact('slide'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Slide id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $slide = $this->Slide->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $slide = $this->Slide->patchEntity($slide, $this->request->getData());
            if ($this->Slide->save($slide)) {
                $this->Flash->success(__('The slide has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The slide could not be saved. Please, try again.'));
        }
        $this->set(compact('slide'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Slide id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $slide = $this->Slide->get($id);
        if ($this->Slide->delete($slide)) {
            $this->Flash->success(__('The slide has been deleted.'));
        } else {
            $this->Flash->error(__('The slide could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
