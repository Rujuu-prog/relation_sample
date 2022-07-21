<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Hobbys Controller
 *
 * @property \App\Model\Table\HobbysTable $Hobbys
 *
 * @method \App\Model\Entity\Hobby[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class HobbysController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Users'],
        ];
        $hobbys = $this->paginate($this->Hobbys);

        $this->set(compact('hobbys'));
    }

    /**
     * View method
     *
     * @param string|null $id Hobby id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $hobby = $this->Hobbys->get($id, [
            'contain' => ['Users'],
        ]);

        $this->set('hobby', $hobby);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $hobby = $this->Hobbys->newEntity();
        if ($this->request->is('post')) {
            $hobby = $this->Hobbys->patchEntity($hobby, $this->request->getData());
            if ($this->Hobbys->save($hobby)) {
                $this->Flash->success(__('The hobby has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The hobby could not be saved. Please, try again.'));
        }
        $users = $this->Hobbys->Users->find('list', ['limit' => 200]);
        $this->set(compact('hobby', 'users'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Hobby id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $hobby = $this->Hobbys->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $hobby = $this->Hobbys->patchEntity($hobby, $this->request->getData());
            if ($this->Hobbys->save($hobby)) {
                $this->Flash->success(__('The hobby has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The hobby could not be saved. Please, try again.'));
        }
        $users = $this->Hobbys->Users->find('list', ['limit' => 200]);
        $this->set(compact('hobby', 'users'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Hobby id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $hobby = $this->Hobbys->get($id);
        if ($this->Hobbys->delete($hobby)) {
            $this->Flash->success(__('The hobby has been deleted.'));
        } else {
            $this->Flash->error(__('The hobby could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
