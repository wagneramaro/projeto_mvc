<?php 
use App\Core\Model;
class Note extends Model {

    public $titulo;
    public $texto;
    public $imagem;

    public function getAll(){
        $sql = "SELECT notes.id, notes.titulo, notes.texto, notes.imagem, users.nome FROM notes INNER JOIN users ON notes.id_user = users.id";
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
        $sql = "INSERT INTO notes (titulo, texto, imagem) VALUES (?, ?, ?)";
        $stmt = Model::getConn()->prepare($sql);
        $stmt->bindValue(1, $this->titulo);
        $stmt->bindValue(2, $this->texto);
        $stmt->bindValue(3, $this->imagem);

        if($stmt->execute()){
            return "Cadastrado com sucesso!";
        } else {
            return "Erro ao cadastrar";
        }
    }

    public function update($id){
        $sql = "UPDATE notes SET titulo = ?, texto = ? WHERE id = ?";
        $stmt = Model::getConn()->prepare($sql);
        $stmt->bindValue(1, $this->titulo);
        $stmt->bindValue(2, $this->texto);
        $stmt->bindValue(3, $id);
        if($stmt->execute()){
            return "M.toast({html: 'Atualizado com sucesso!', classes: 'rounded, green'});";
        } else {
            return "M.toast({html: 'Falha ao atualizar!', classes: 'rounded, red'});";
        }
    }

    public function updateImagem($id){
        $sql = "UPDATE notes SET titulo = ?, texto = ?, imagem = ? WHERE id = ?";
        $stmt = Model::getConn()->prepare($sql);
        $stmt->bindValue(1, $this->titulo);
        $stmt->bindValue(2, $this->texto);
        $stmt->bindValue(3, $this->imagem);
        $stmt->bindValue(4, $id);
        if($stmt->execute()){
            return "Atualizado com sucesso!";
        } else {
            return "Erro ao atualizar";
        }
    }

    public function deleteImage($id){
        $sql = "UPDATE notes SET imagem = ? WHERE id = ?";
        $stmt = Model::getConn()->prepare($sql);
        $stmt->bindValue(1, "");
        $stmt->bindValue(2, $id);
        if($stmt->execute()){
            return "Imagem excluida com sucesso!";
        } else {
            return "Erro ao apagar imagem";
        }
    }

    public function delete($id){

        $resultado = $this->findId($id);
        
        if(!empty($resultado['imagem'])):
            unlink("upload/".$resultado['imagem']);
        endif;


        $sql = 'DELETE FROM notes WHERE id = ?';
        $stmt = Model::getConn()->prepare($sql);
       $stmt->bindValue(1 , $id);
        if($stmt->execute()){
            return "<br>Excluido com sucesso!";
        } else {
            return "<br>Erro ao excluir";
        }
    }

    public function search($search){
        $sql = "SELECT * FROM notes WHERE titulo LIKE ? COLLATE utf8_general_ci";
        $stmt = Model::getConn()->prepare($sql);
        $stmt->bindValue(1, "%{$search}%");
        $stmt->execute();

        if($stmt->rowCount() > 0):
            $resultado = $stmt->fetchAll(\PDO::FETCH_ASSOC);
            return $resultado;
        else:
            return [];
        endif;
    }


}