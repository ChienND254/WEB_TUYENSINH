<?php
    class DModel {
        protected $db = array();
        function __construct() {
            $connect = "mysql:dbname=id21107439_web_tuyensinh;host=localhost";
            $user = 'id21107439_chien';
            $password = 'Anhchienpro02@';
            $this->db = new Database($connect,$user,$password);
        }
    }