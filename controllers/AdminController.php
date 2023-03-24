<?php

class AdminController{
    public function index($page){
        include('views/admin/'.$page.'.php');
    }
}