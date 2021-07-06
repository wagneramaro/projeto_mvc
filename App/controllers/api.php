<?php



class Api extends \App\Core\Controller{
    public function notes(){
      
        $note = $this->model('Note');
        $dados = $note->getAll();
      
        header('Content-Type: application/json; charset:utf-8');

        echo json_encode($dados);
       
    }

   



}