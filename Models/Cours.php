<?php 

    include 'Categorie.php';
    include 'Utilisateur.php';

    class Cours{
        private int $id;
        private string $titre;
        private string $description;
        private Categorie $categorie;
        private Utilisateur $enseignant;
        private  $tags = [];
        private $etudiants = [];

        public function __construct(){}

        public function __call($name, $arguments) {
            if($name == "creeCours"){
                if(count($arguments) == 1){
                    $this->id = $arguments[0];
                } 

                if(count($arguments) == 2){
                    $this->id = $arguments[0];
                    $this->titre = $arguments[1];
                }

                if(count($arguments) == 3){
                    $this->id = $arguments[0];
                    $this->titre = $arguments[1];
                    $this->description = $arguments[2];
                }

                if(count($arguments) == 4){
                    $this->id = $arguments[0];
                    $this->titre = $arguments[1];
                    $this->description = $arguments[2];
                    $this->categorie = $arguments[3];
                }

                if(count($arguments) == 5){
                    $this->id = $arguments[0];
                    $this->titre = $arguments[1];
                    $this->description = $arguments[2];
                    $this->categorie = $arguments[3];
                    $this->enseignant = $arguments[4];
                }

                if(count($arguments) == 6){
                    $this->id = $arguments[0];
                    $this->titre = $arguments[1];
                    $this->description = $arguments[2];
                    $this->categorie = $arguments[3];
                    $this->enseignant = $arguments[4];
                    $this->tags = $arguments[5];
                }

                if(count($arguments) == 7){
                    $this->id = $arguments[0];
                    $this->titre = $arguments[1];
                    $this->description = $arguments[2];
                    $this->categorie = $arguments[3];
                    $this->enseignant = $arguments[4];
                    $this->tags = $arguments[5];
                    $this->etudiants = $arguments[6];
                }
                

                   
            }
        }


        public function setId(int $id)
        {
            $this->id = $id;
        }

        public function setTitre(string $titre)
        {
            $this->titre = $titre;
        }

        public function setDescription(string $description)
        {
            $this->description = $description;
        }

        public function setCtagorie(Categorie $categorie)
        {
            $this->categorie = $categorie;
        }

        public function setEnseignant(Utilisateur $enseignant)
        {
            $this->enseignant = $enseignant;
        }

        
        public function setTags(array $tags)
        {
            $this->tags = $tags;
        }

        public function setEtudiant(array $etudiants)
        {
            $this->etudiants = $etudiants;
        }

        public function getId()
        {
            return $this->id;
        }

        public function getTitre()
        {
            return $this->titre;
        }

        public function getDescription()
        {
            return $this->description;
        }

        public function getCategorie()
        {
            return $this->categorie;
        }

        public function getEnseignant()
        {
            return $this->enseignant;
        }

        public function getTags()
        {
            return $this->tags;
        }


        public function getEtudiant()
        {
            return $this->etudiants;
        }

        public function __toString()
        {
            return "Id: " . $this->id . " Titre: " . $this->titre . " Description: " . $this->description . " Categorie: " . $this->categorie . " Enseignant: " . $this->enseignant .  " Tags : [" . implode(",", $this->tags)."]" . " Etudiants : [" . implode(",", $this->etudiants)."]" . " ";
        }
    }
?>