<?php 

    class Role{
        private int $id;
        private string $nom;

        public function __construct(){}

       

        public function getId()
        {
            return $this->id;
        }

        public function getNom()
        {
            return $this->nom;
        }

        public function setId(int $id)
        {
            $this->id = $id;
        }

        public function setnom(string $nom)
        {
            $this->nom = $nom;
        }

        public function __toString()
        {
            return "Id: " . $this->id . " Nom: " . $this->nom . " ";
        }
    }
?>