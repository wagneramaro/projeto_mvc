<?php

class Notes extends \App\Core\Controller{
    
    public function ver($id = ''){
      
        $note = $this->model('Note');
        $dados = $note->findId($id);
      

       $this->view('notes/ver',  $dados);
    }

    public function criar(){

        $mensagem = array();
        if(isset($_POST['cadastrar'])){
            $note = $this->model('Note');
            $note->titulo = $_POST['titulo'];
            $note->texto = $_POST['texto'];

            $mensagem[] = $note->save();

        }
        $this->view('notes/criar', $dados = ['mensagem' => $mensagem]);
    }

    public function excluir($id = ''){

        $mensagem = array();

        $note = $this->model('Note');
        $mensagem[] = $note->delete($id);

        $dados = $note->getAll();

        $this->view('home/index', $dados = ['registros'=> $dados, 'mensagem' => $mensagem]);

    }

}