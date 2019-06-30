<?php 
    namespace App\Controller;
    
    use App\Controller\AppController;
    
    class HelloController extends AppController
    {
        public function index()
        {
            //変数teststrをセット
            $this->set('comment', 'HelloWorld');
        }
    }
