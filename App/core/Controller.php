<?php 
class Controller {
    public function model($model){
        require_once '../App/models/'.$model.'.php';
        return new $model;
    }
}