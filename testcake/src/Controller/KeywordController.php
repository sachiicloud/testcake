<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Keyword Controller
 *
 * @property \App\Model\Table\KeywordTable $Keyword
 *
 * @method \App\Model\Entity\Keyword[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class KeywordController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $keyword = $this->paginate($this->Keyword);

        $this->set(compact('keyword'));
    }

    /**
     * View method
     *
     * @param string|null $id Keyword id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $keyword = $this->Keyword->get($id, [
            'contain' => []
        ]);

        $this->set('keyword', $keyword);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        var_dump(print_r($this->request->getData(),true));
        
        $keyword = $this->Keyword->newEntity();
        if ($this->request->is('post')) {
            $keyword = $this->Keyword->patchEntity($keyword, $this->request->getData());
            if ($this->Keyword->save($keyword)) {
                $this->Flash->success(__('The keyword has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The keyword could not be saved. Please, try again.'));
        }
        $this->set(compact('keyword'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Keyword id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $keyword = $this->Keyword->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $keyword = $this->Keyword->patchEntity($keyword, $this->request->getData());
            if ($this->Keyword->save($keyword)) {
                $this->Flash->success(__('The keyword has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The keyword could not be saved. Please, try again.'));
        }
        $this->set(compact('keyword'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Keyword id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $keyword = $this->Keyword->get($id);
        if ($this->Keyword->delete($keyword)) {
            $this->Flash->success(__('The keyword has been deleted.'));
        } else {
            $this->Flash->error(__('The keyword could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
