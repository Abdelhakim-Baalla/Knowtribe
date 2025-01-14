<?php

   abstract class Etiquette{
        protected int $id;
        protected string $nom;
        protected string $description;
        protected string $logo;

        public function __construct(){}

        public function getId()
        {
            return $this->id;
        }

        public function getNom()
        {
            return $this->nom;
        }

        public function getDescription()
        {
            return $this->description;
        }

        public function getLogo()
        {
            return $this->logo;
        }

        public function setId(int $id)
        {
            $this->id = $id;
        }

        public function setNom(string $nom)
        {
            $this->nom = $nom;
        }

        public function setDescription(string $description)
        {
            $this->description = $description;
        }

        public function setLogo(string $logo)
        {
            $this->logo = $logo;
        }

        public function __toString()
        {
            return "Id: " . $this->id . " Nom: " . $this->nom . " Description: " . $this->description . " Logo: " . $this->logo . " ";
        }
    }
?>