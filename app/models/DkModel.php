<?php
    class DkModel extends DModel{
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
        function dknv($nv1, $tinhll, $huyenll, $xall, $diachill,$tel, $img) {
            $user = $this->find_user_by_id();
            $data = array(
                'nv1' => $nv1,
                'tinhll' => $tinhll,
                'huyenll' => $huyenll,
                'xall' => $xall,
                'diachill' => $diachill,
                'tel' => $tel,
                'img' => $img,
            );
            $table = 'ts';
            $con = 'id='.$user["id"];
            return $this->db->update($table, $data, $con);
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
                'thcs' => $thcs
            );
            return $this->db->update($table,$data, $con);
        }
    }