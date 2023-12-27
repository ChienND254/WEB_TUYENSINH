<?php
    class PrintController extends DController{
        function __construct() {
            parent::__construct();
        }
        function index() {
            Session::init();
            if (Session::get('login') == true || isset($_COOKIE["remember"])) {
                $printModel = $this->load->model('PrintModel');
                $data['ts'] = $printModel->ts(); 
                $data['nganh'] = $printModel->nganh();                 
                $data['tinh'] = $printModel->tinh();
                $data['huyen'] = $printModel -> huyen($data['ts']['tinhthcs'], $data['ts']['huyenthcs']);                
                $this->load->view('print', $data);
            } else {
                $this->load->view('login');
            }     
        }
        function notFound() {
            $this->load->view('404');
        }
    }