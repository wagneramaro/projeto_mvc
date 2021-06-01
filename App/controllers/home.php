<?php

class Home extends \App\Core\Controller{
    public function index(){
      
        $note = $this->model('Note');
        $dados = $note->getAll();
      

       $this->view('home/index',  $dados = ['registros' => $dados]);
    }
}