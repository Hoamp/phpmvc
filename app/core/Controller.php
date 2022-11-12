<?php

class Controller{
    // untuk view
    public function view($view, $data = []){
        require_once '../app/views/' . $view . '.php';
    }

    // untuk model
    public function model($model){
        require_once '../app/models/' . $model . '.php';
        return new $model;
    }
}


?>