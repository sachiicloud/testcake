<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * KeywordGroup Controller
 *
 * @property \App\Model\Table\KeywordGroupTable $KeywordGroup
 *
 * @method \App\Model\Entity\KeywordGroup[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class KeywordGroupController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $keywordGroup = $this->paginate($this->KeywordGroup);

        $this->set(compact('keywordGroup'));
    }

    /**
     * View method
     *
     * @param string|null $id Keyword Group id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $keywordGroup = $this->KeywordGroup->get($id, [
            'contain' => []
        ]);

        $this->set('keywordGroup', $keywordGroup);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $keywordGroup = $this->KeywordGroup->newEntity();
        if ($this->request->is('post')) {
            $keywordGroup = $this->KeywordGroup->patchEntity($keywordGroup, $this->request->getData());
            if ($this->KeywordGroup->save($keywordGroup)) {
                $this->Flash->success(__('The keyword group has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The keyword group could not be saved. Please, try again.'));
        }
        $this->set(compact('keywordGroup'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Keyword Group id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $keywordGroup = $this->KeywordGroup->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $keywordGroup = $this->KeywordGroup->patchEntity($keywordGroup, $this->request->getData());
            if ($this->KeywordGroup->save($keywordGroup)) {
                $this->Flash->success(__('The keyword group has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The keyword group could not be saved. Please, try again.'));
        }
        $this->set(compact('keywordGroup'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Keyword Group id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $keywordGroup = $this->KeywordGroup->get($id);
        if ($this->KeywordGroup->delete($keywordGroup)) {
            $this->Flash->success(__('The keyword group has been deleted.'));
        } else {
            $this->Flash->error(__('The keyword group could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
