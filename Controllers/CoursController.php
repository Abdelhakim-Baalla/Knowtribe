
<?php
    include ("../Models/Cours.php");

   class CoursController
   {
    private Cours $cours;
    public $nom, $prenom, $email, $phone, $role;

    public function __construct()
    {
        $this->cours = new Cours();
    }

    public function Cours()
    {
       $this->cours->findcours('cours');
    }
 
    public function AfficherCoursDisponibles() {
        $cours = $this->cours->AfficherCoursDisponibles();
    }

    public function inscrireEtudiantAuCours($utilisateur_id, $cours_id)
    {
        $this->cours->inscrireEtudiantAuCours($utilisateur_id, $cours_id);
    }

    public function mesCours($utilisateur_id, $cours_id)
    {
        $this->cours->mesCours($utilisateur_id, $cours_id);
    }

    


    public function deleteOption()
    {
        $this->cours->findcoursTodelete('cours');
    }
    
   

    public function CreeCours($names)
    {
       $this->cours->creecours('cours', $names);
    }

    public function Delete($id)
    {
        $this->cours->deleteCours('cours', $id);
    }

   }
?>
