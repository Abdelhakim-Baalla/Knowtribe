<?php 

    class Role{
        private int $id;
        private string $nom;

        public function __construct(){}

        public function __call($name, $arguments) {
            if($name == "creeRole"){
                if(count($arguments) == 1){
                    $this->id = $arguments[0];
                } 

                if(count($arguments) == 2){
                    $this->id = $arguments[0];
                    $this->nom = $arguments[1];
                }
            }
        }

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