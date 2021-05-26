<?php 
use App\Core\Model;
class Note extends Model {
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
}