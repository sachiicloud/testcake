<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * GroupLink Controller
 *
 * @property \App\Model\Table\GroupLinkTable $GroupLink
 *
 * @method \App\Model\Entity\GroupLink[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class GroupLinkController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $groupLink = $this->paginate($this->GroupLink);

        $this->set(compact('groupLink'));
    }

    /**
     * View method
     *
     * @param string|null $id Group Link id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $groupLink = $this->GroupLink->get($id, [
            'contain' => []
        ]);

        $this->set('groupLink', $groupLink);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $groupLink = $this->GroupLink->newEntity();
        if ($this->request->is('post')) {
            $groupLink = $this->GroupLink->patchEntity($groupLink, $this->request->getData());
            if ($this->GroupLink->save($groupLink)) {
                $this->Flash->success(__('The group link has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The group link could not be saved. Please, try again.'));
        }
        $this->set(compact('groupLink'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Group Link id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $groupLink = $this->GroupLink->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $groupLink = $this->GroupLink->patchEntity($groupLink, $this->request->getData());
            if ($this->GroupLink->save($groupLink)) {
                $this->Flash->success(__('The group link has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The group link could not be saved. Please, try again.'));
        }
        $this->set(compact('groupLink'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Group Link id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $groupLink = $this->GroupLink->get($id);
        if ($this->GroupLink->delete($groupLink)) {
            $this->Flash->success(__('The group link has been deleted.'));
        } else {
            $this->Flash->error(__('The group link could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
