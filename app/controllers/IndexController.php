<?php
    class IndexController extends DController{
        function __construct() {
            parent::__construct();
        }
        function index() {
            Session::init();
            
            if (Session::get('login') == true || isset($_COOKIE["remember"]) == true || isset($_SESSION['token'])) {                 
                $this->load->view('home');
            } else {
                $this->load->view('login');
            }
            
        }
        function notFound() {
            $this->load->view('404');
        }
    }