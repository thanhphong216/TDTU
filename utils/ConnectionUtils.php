<?php

    namespace Utils;

    class ConnectionUtils{
        private $servername = 'localhost';
        private $database = 'tdtu';
        private $post = '3306';
        private $username = 'root';
        private $password = '';

        private $conn;


        private static $ourInstance;
        public static function getInstance(){
            if(static::$ourInstance == null){
                static::$ourInstance = new ConnectionUtils();
            }
            return static::$ourInstance;
        }
        private function __construct(){
            
        }



        public function getConnect(){
            if(!$this->conn){
                $this->conn = mysqli_connect($this->servername, $this->username, $this->password, $this->database, $this->post);
            }

            return $this->conn;
        }

        public function closeConnect(){
            return mysqli_close($this->conn);
        }
    }

?>