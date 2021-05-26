<?php

class Home extends \App\Core\Controller{
    public function index($nome = ''){
       $user = $this->model('User');
       $user->nome = $nome;
      

       $this->view('home/index',  ['nome' => $user->nome]);
    }
}