<?php 
use App\Core\Model;
class Note extends Model {

    public $titulo;
    public $texto;

    public function getAll(){
        $sql = "SELECT * FROM notes";
        $stmt = Model::getConn()->prepare($sql);
        $stmt->execute();

        if($stmt->rowCount() > 0):
            $resultado = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $resultado;
        else:
            return [];
        endif;
    }

    public function findId($id){

        $sql = "SELECT * FROM notes WHERE id = ?";
        $stmt = Model::getConn()->prepare($sql);
        $stmt->bindValue(1, $id);
        $stmt->execute();

        if($stmt->rowCount() > 0):
            $resultado = $stmt->fetch(PDO::FETCH_ASSOC);
            return $resultado;
        else:
            return [];
        endif;

    }

    public function save(){
        $sql = "INSERT INTO notes (titulo, texto) VALUES (?, ?)";
        $stmt = Model::getConn()->prepare($sql);
        $stmt->bindValue(1, $this->titulo);
        $stmt->bindValue(2, $this->texto);

        if($stmt->execute()){
            return "Cadastrado com sucesso!";
        } else {
            return "Erro ao cadastrar";
        }
    }


}