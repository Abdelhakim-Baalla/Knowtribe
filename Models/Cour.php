<?php 

    // include 'Tags.php';
    // include 'Categories.php';
    // include 'Enseignant.php';
    // include 'Etudiant.php';

    class Cour{
        private int $id;
        private string $titre;
        private string $description;
        private  $tags = [];
        private Categories $categorie;
        private Enseignant $enseignant;
        private $etudiant = [];


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

        public function setTags(array $tags)
        {
            $this->tags = $tags;
        }

        public function setCtagorie(Categories $categorie)
        {
            $this->categorie = $categorie;
        }

        public function setEnseignant(Enseignant $enseignant)
        {
            $this->enseignant = $enseignant;
        }

        public function setEtudiant(array $etudiant)
        {
            $this->etudiant = $etudiant;
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

        public function getTags()
        {
            return $this->tags;
        }

        public function getCategorie()
        {
            return $this->categorie;
        }

        public function getEnseignant()
        {
            return $this->enseignant;
        }

        public function getEtudiant()
        {
            return $this->etudiant;
        }

        public function __toString()
        {
            return "Id: " . $this->id . " Titre: " . $this->titre . " Description: " . $this->description . " Categorie: " . $this->categorie . " Enseignant: " . $this->enseignant .  " Tags : [" . implode(",", $this->tags)."]" . " Etudiants : [" . implode(",", $this->etudiant)."]" . " ";
        }
    }
?>