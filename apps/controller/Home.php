<?php

class Home extends Controller {
    public function index(){
        $this->view ('home/login');
    }
    public function regis(){
        $this->view ('home/register');
    }
   
}