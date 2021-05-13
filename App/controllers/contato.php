<?php 
class Contato{

    public function index(){
        echo 'index do contato, use o parametro email ou contato na url';
    }

    public function email(){
        echo 'email@email.com';
    }

    public function telefone(){
        echo 'telefone 32 99999-9999';
    }

    public function dados($nome = '', $sobrenome = ''){
        echo $nome.'<br>'.$sobrenome;
    }
}