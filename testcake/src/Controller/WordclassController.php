<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Wordclass Controller
 *
 * @property \App\Model\Table\WordclassTable $Wordclass
 *
 * @method \App\Model\Entity\Wordclas[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class WordclassController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $wordclass = $this->paginate($this->Wordclass);

        $this->set(compact('wordclass'));
    }

    /**
     * View method
     *
     * @param string|null $id Wordclas id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $wordclas = $this->Wordclass->get($id, [
            'contain' => []
        ]);

        $this->set('wordclas', $wordclas);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $wordclas = $this->Wordclass->newEntity();
        if ($this->request->is('post')) {
            $wordclas = $this->Wordclass->patchEntity($wordclas, $this->request->getData());
            if ($this->Wordclass->save($wordclas)) {
                $this->Flash->success(__('The wordclas has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The wordclas could not be saved. Please, try again.'));
        }
        $this->set(compact('wordclas'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Wordclas id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $wordclas = $this->Wordclass->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $wordclas = $this->Wordclass->patchEntity($wordclas, $this->request->getData());
            if ($this->Wordclass->save($wordclas)) {
                $this->Flash->success(__('The wordclas has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The wordclas could not be saved. Please, try again.'));
        }
        $this->set(compact('wordclas'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Wordclas id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $wordclas = $this->Wordclass->get($id);
        if ($this->Wordclass->delete($wordclas)) {
            $this->Flash->success(__('The wordclas has been deleted.'));
        } else {
            $this->Flash->error(__('The wordclas could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
