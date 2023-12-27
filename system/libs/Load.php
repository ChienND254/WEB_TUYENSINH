<?php
    class Load {
        function __construct() {
            
        }
        function view($fileName, $data = NULL){
            include_once("app/views/$fileName.php");
        }
        function model($fileName){
            include_once("app/models/$fileName.php") ;
            return new $fileName;
        }
        function library($filename) {
            include_once("library/$filename.php");
            return new $fileName;
        }
    }