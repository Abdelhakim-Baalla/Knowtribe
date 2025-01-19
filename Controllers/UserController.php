<?php
    include ("../Models/Utilisateur.php");

   class UserController
   {
    private Utilisateur $user;

    public function __construct()
    {
        $this->user = new Utilisateur();
    }

    public function Users($finder)
    {
       $this->user->findusers('utilisateur', $finder);
    }

    public function Cree($names)
    {
       $this->user->creeusers('utilisateur', $names);
    }

    public function Delete($id)
    {
        $this->user->deleteusers('utilisateur', $id);
    }
       
   }
?>