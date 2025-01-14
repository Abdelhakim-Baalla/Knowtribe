<?php

    class Database
    {
        private $host = 'localhost';
        private $user = 'root';
        private $password = '';
        private $database = 'youdemy';

        public function connect()
        {
            try
            {
               return $connect = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->database . ";charset=UTF8",$this->user,$this->password); 
            //    echo 'success';  
            } catch (PDOException $e)
            {
                die("Connection failed: " . $e->getMessage());
            }

        }
    }

    $connexion = new Database();
    $connexion->connect();

?>