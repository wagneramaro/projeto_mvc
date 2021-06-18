<?php

use \App\core\Controller;

class Erro404 extends Controller{
    public function index($nome = ''){
        $this->view('erros/404');
    }
}

?>