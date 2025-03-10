
<?php
    include ("../Models/Utilisateur.php");

   class UserController
   {
    private Utilisateur $user;
    public $nom, $prenom, $email, $phone, $role;

    public function __construct()
    {
        $this->user = new Utilisateur();
    }

    public function Users($finder)
    {
       $this->user->findusers('utilisateur', $finder);
    }

    public function deleteOption()
    {
        $this->user->findusersTodelete('utilisateur');
    }
    
    public function convertFkToRole($finder)
    {
       $this->user->findusers('utilisateur', $finder);
    }

    public function CreeUtilisateur($names)
    {
       $this->user->creeusers('utilisateur', $names);
    }

    public function Delete($id)
    {
        $this->user->deleteusers('utilisateur', $id);
    }

   }
?>
