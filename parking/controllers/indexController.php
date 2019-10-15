<?php

class indexController extends usuario{

    public function index(){
        require_once 'views/layouts/header_index.php';
        require_once 'views/index/index.php';
        require_once 'views/layouts/footer_index.php';
    } 


}

?>