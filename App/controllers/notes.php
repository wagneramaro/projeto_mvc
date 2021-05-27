<?php

class Notes extends \App\Core\Controller{
    
    public function ver($id = ''){
      
        $note = $this->model('Note');
        $dados = $note->findId($id);
      

       $this->view('notes/ver',  $dados);
    }

}