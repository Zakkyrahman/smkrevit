<?php

    class DB{
        public $host = "127.0.0.1";
        private $user = "root";
        private $password = "";
        private $database = "dbrestoran"; 

public function __construct(){
    echo "construct";
    
}

        // method
        public function selectData(){
            echo 'select data';
        }
        

        public function getDatabase(){
            return $this->database;
        }
        public function tampil(){
            $this->selectData();
        }
        public static function insert(){
            echo "static function";
        }
    }

    DB::insert();

    $db = new DB;

    // $db->selectData();

    // echo '<br>';
    //  echo $db->host;

    //  echo '<br>';
    // echo $db->getDatabase();

    // echo '<br>';
    // $db->tampil();

    
?>