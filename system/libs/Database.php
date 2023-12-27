<?php
    class Database extends PDO{
        function __construct($connect,$user,$password) {    
            parent::__construct($connect,$user,$password);
        }
        public function read($column="*",$table, $data = array()){
            $updateKeys = NULL;
            foreach ($data as $key => $value) {
                $updateKeys .= "$key=:$key AND ";
            }
            $updateKeys = rtrim($updateKeys," AND ");
            $sql = "SELECT $column FROM $table WHERE $updateKeys";
            $statement = $this->prepare($sql);
            foreach ($data as $key => $value) {
                $statement -> bindValue(":$key", $value, PDO::PARAM_STR);
            }
            $statement->execute();
            return $statement->fetch(PDO::FETCH_ASSOC);
        }
        public function readAllCon($column="*",$table, $data = array()){
            $updateKeys = NULL;
            foreach ($data as $key => $value) {
                $updateKeys .= "$key=:$key,";
            }
            $updateKeys = rtrim($updateKeys,",");
            $sql = "SELECT $column FROM $table WHERE $updateKeys";
            $statement = $this->prepare($sql);
            foreach ($data as $key => $value) {
                $statement -> bindValue(":$key", $value, PDO::PARAM_STR);
            }
            $statement->execute();
            return $statement->fetchAll(PDO::FETCH_ASSOC);
        }
        public function readAll($sql){
            
            $statement = $this->prepare($sql);
            $statement->execute();
            return $statement->fetchAll(PDO::FETCH_ASSOC);
        }
        public function read_each($sql){
            
            $statement = $this->prepare($sql);
            $statement->execute();
            return $statement->fetch(PDO::FETCH_ASSOC);
        }
        public function create($table ,$data) {
            $keys = implode(",",array_keys($data));
            $values = ":".implode(", :",array_keys($data));
            $sql = "INSERT INTO $table($keys) VALUES($values)";
            $statement = $this->prepare($sql);
            foreach ($data as $key => $value) {
                $statement -> bindValue(":$key", $value, PDO::PARAM_STR);
            }
            return $statement->execute();
        }
        public function update($table, $data, $condition) {
            $updateKeys = NULL;
            foreach ($data as $key => $value) {
                $updateKeys .= "$key=:$key,";
            }
            $updateKeys = rtrim($updateKeys,",");
            $sql = "UPDATE $table SET $updateKeys WHERE $condition";
            $statement = $this->prepare($sql);
            foreach ($data as $key => $value) {
                $statement -> bindValue(":$key", $value, PDO::PARAM_STR);
            }
            return $statement->execute();
        }
        public function delete($table,$condition, $limit = 1) {
            $sql = "DELETE FROM $table WHERE $condition LIMIT $limit";
           
            return $this->exec($sql);
        }
        public function select($sql) {
            $statement = $this -> prepare($sql);
            $statement -> execute();
            return $statement -> fetchAll(PDO::FETCH_ASSOC);
        }
        public function update_user($sql) {
            $statement = $this -> prepare($sql);
            $statement -> execute();
            return $statement -> fetchAll(PDO::FETCH_ASSOC);
        }
    }