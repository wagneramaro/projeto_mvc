<?php
namespace App\Core;
class Model {

    private static $instance;

    public static function getConn(){
        if(!isset(self::$instance)):
            self::$instance = new \PDO ('mysql:host=localhost;dbname=mvc2021;charset=utf8', 'root', '');
        endif;

        return self::$instance;
    }

}