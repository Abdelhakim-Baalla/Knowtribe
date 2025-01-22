<?php 

    include 'Categorie.php';
    include ("CrudModels.php");

    class Cours{
        private int $id;
        private string $titre;
        private string $description;
        private Categorie $categorie;
        private Utilisateur $enseignant;
        private  $tags = [];
        private $etudiants = [];
        private CrudModels $crudModels;

        public function __construct(){
            $this->crudModels = new CrudModels();
        }


        public function findcours($nomtable)
        {
            $this->crudModels->FindCours($nomtable);
        }

        public function AfficherCoursDisponibles()
        {
            $this->crudModels->AfficherCoursDisponibles();
        }

        public function inscrireEtudiantAuCours($utilisateur_id, $cours_id)
        {
            $this->crudModels->inscrireEtudiantAuCours($utilisateur_id, $cours_id);
        }

        public function mesCours($utilisateur_id, $cours_id)
        {
           $this->crudModels->mesCours($utilisateur_id, $cours_id);
        }

        public function findcoursTodelete($nomtable)
        {
            $this->crudModels->FindAllTodelete($nomtable);
        }

        public function creecours($tableName, $names)
        {
            $this->crudModels->Create($tableName, $names);
        }

        public function deleteCours($tableName, $id)
        {
            $this->crudModels->DeleteWithId($tableName, $id);
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