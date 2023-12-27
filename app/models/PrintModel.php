<?php
    class PrintModel extends DModel{
        public function __construct() {
            parent::__construct();
        }
        function ts() {
            $table_ts = "ts";
            $table_dt = "dantoc";
            $table_nganh = "z03_nganh";
            $id = $_SESSION['id'];
            $sql = "SELECT * FROM $table_ts 
            INNER JOIN $table_dt ON $table_ts.dt=$table_dt.id  WHERE $table_ts.id = $id";
            return $this->db->read_each($sql);
        }
        function nganh() {
            $sql = "SELECT * FROM z03_nganh";
            return $this->db->readAll($sql);
        }
        function tinh() {
            $table = "z03_tinh";
            $sql = "SELECT * FROM $table";
            return $this->db->readAll($sql);
        }
        function huyen($matinh, $mahuyen) {
            $table = "z03_huyen";
            $data =[
                'matinh' => $matinh,
                'ma' => $mahuyen
            ];
            return $this->db->read("*",$table, $data);
        }
        
    }