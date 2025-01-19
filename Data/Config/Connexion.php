<?php

    class Connexion
    {
        private $host = 'localhost';
        private $user = 'root';
        private $password = '';
        private $database = 'youdemy';

        public function connexion()
        {
            try
            {
               $connect = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->database . ";charset=UTF8",$this->user,$this->password); 
               return $connect;
               //    echo 'success';  
            } catch (PDOException $e)
            {
                die("Connection failed: " . $e->getMessage());
            }

        }
    }

?>