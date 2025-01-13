<?php


    class Utilisateur{
        private int $id;
        private string$nom;
        private string$prenom;
        private string$email;
        private string$password;
        private string$phone;
        private $cours = [];
        private Role $role;

        public function __construct(){}

        public function setId(int $id){
            $this->id = $id;
        }

        public function setNom(string $nom){
            $this->nom = $nom;
        }

        public function setPrenom(string $prenom){
            $this->prenom = $prenom;
        }

        public function setEmail(string $email){
            $this->email = $email;
        }

        public function setPassword(string $password){
            $this->password = $password;
        }

        public function setPhone(string $phone){
            $this->phone = $phone;
        }

        public function setCours(array $cours){
            $this->cours = $cours;
        }

        public function setRole(Role $role){
            $this->role = $role;
        }


        public function getNom()
        {
            return $this->nom;
        }

        public function getPrenom()
        {
            return $this->prenom;
        }

        public function getEmail()
        {
            return $this->email;
        }

        public function getPassword()
        {
            return $this->password;
        }

        public function getPhone()
        {
            return $this->phone;
        }

        public function getCours()
        {
            return $this->cours;
        }

        public function getRole()
        {
            return $this->role;
        }


        public function __toString()
        {
            return "Id: " . $this->id . " Nom: " . $this->nom . " Prenom: " . $this->prenom . " Email: " . $this->email . " Password: " . $this->password . " Phone: " . $this->phone . " Cours : [" . implode(",", $this->cours)."]" . " Role: " . $this->role . " ";
        }
        
    }

    
?>