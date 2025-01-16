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
       
   }
?>