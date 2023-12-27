<?php
    class HosoModel extends DModel{
        public function __construct() {
            parent::__construct();
        }
        function danhsachtinh() {
            $table = "z03_tinh";
            $sql = "SELECT * FROM $table";
            return $this->db->readAll($sql,$table);
        }
        function danhsachhuyen($matinh) {
            $data = [
                "matinh" => $matinh,
            ];
            $table = "z03_huyen";
            return $this->db->readAllCon("*", $table, $data);
        }
        function danhsachdt(){
            $table = "dantoc";
            $sql = "SELECT * FROM $table ORDER BY id";
            return $this->db->readAll($sql,$table);
        }
        function find_user_by_id() {
            Session::init();
            if (isset($_SESSION['id'])) {
                $table = "users";
                $column = "*";
                $data = [
                    'id' => $_SESSION['id'],
                ];
                return $this->db->read($column, $table, $data);
            }
        }
        function themhoso($name, $gt, $ns, $dt, $tinhns, $tinhthcs, $huyenthcs, $xathcs, $thcs) {
            $user = $this->find_user_by_id();
            $id = $user['id'];
            $data = array(
                'id' => $id,
                'name' => $name,
                'gt' => $gt,
                'ns' => $ns,
                'dt' => $dt,
                'nst' => $tinhns,
                'tinhthcs' => $tinhthcs,
                'huyenthcs' => $huyenthcs,
                'xathcs' => $xathcs,
                'thcs' => $thcs
            );
            $table = 'ts';
            return $this->db->create($table, $data);
        }
        function ts() {
            $table_ts = 'ts';
            $data = [
                'id' => $_SESSION['id'],
            ];
            return $this->db->read('*', $table_ts, $data);
        }
        function suahoso($name,$gt,$ns,$dt,$tinhns,$tinhthcs,$huyenthcs,$xathcs,$thcs) {
            $table = 'ts';
            Session::init();
            $con = "id=".$_SESSION['id'];
            $data = array(
                'name' => $name,
                'gt' => $gt,
                'ns' => $ns,
                'dt' => $dt,
                'nst' => $tinhns,
                'tinhthcs' => $tinhthcs,
                'huyenthcs' => $huyenthcs,
                'xathcs' => $xathcs,
                'thcs' => $thcs,
                'email' => $_SESSION['email']
            );
            return $this->db->update($table,$data, $con);
        }
        function list_product($table_category,$table_product) {
            $sql = "SELECT * FROM $table_category, $table_product WHERE $table_category.id_category_product=$table_product.id_category_product";
            return $this->db->select($sql);
        }
        function product_id($column,$table, $data) {
            return $this->db->read($column,$table, $data);
        }
        function capnhathoso($table, $data) {
            return $this->db->create($table, $data);
        }
        function delete_product($table, $condition) {
            return $this->db->delete($table, $condition);
        }
        function update_product($table,$data, $condition) {
            return $this->db->update($table,$data, $condition);
        }
    }