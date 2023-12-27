<?php

    class ThanhtoanController extends DController{
        function __construct() {
            parent::__construct(); 
            header('Content-type: text/html; charset=utf-8');        
        }
        function index() {
            Session::init();
            require $_SERVER['DOCUMENT_ROOT'].'/app/config/services.php';
            if (Session::get('login') == true || isset($_COOKIE["remember"]) == true || Session::get('token') == true) {
                $this->load->view('thanhtoan');
            } else {
                $this->load->view('login');
            }     
        }

    }
    ?>