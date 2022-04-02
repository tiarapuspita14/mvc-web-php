<?php

class Controller{
    public function view($view, $data=[]){
        require_once '../apps/view/' . $view . '.php';

    }
}