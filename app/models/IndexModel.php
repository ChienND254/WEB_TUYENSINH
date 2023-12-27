<?php
    class IndexModel extends DModel{
        public function __construct() {
            parent::__construct();
        }
        function get($table) {
            return $this->db->select($table);
        }
        function getById($table, $id) {
            $sql = "SELECT * FROM $table WHERE id =:id";
            $data = array(
                ':id' => $id,
            );
            return $this->db-select($sql, $data);
        }
    }