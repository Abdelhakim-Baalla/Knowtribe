<?php

require_once($_SERVER['DOCUMENT_ROOT'] . "/Youdemy/Models/CrudModels.php");

    class Authlogin
    {

        public function login($email, $password){
            $utilisateurData = new CrudModels();
            $utilisateur = $utilisateurData->loginByEmailAndPassword($email, $password);
            if($utilisateur['role_id'] == 17){
                header('location: ../AdminDashboard.php');
            } 
            if ($utilisateur['role_id'] == 18){
                header('location: ../Etudiant.php');
            }  
            if ($utilisateur['role_id'] == 19){
                header('location: ../EnseignantDashboard.php');
            }
            if (empty($utilisateur['role_id']) || $utilisateur['status'] == 'Suspendu'){
                header('location: ../compteSuspend.php');
            }
        }

        public function register($tableName, $names){
            $utilisateurData = new CrudModels();
            $utilisateur = $utilisateurData->Create($tableName, $names);
            header('location:../compteSuspend.php');
        }
    }
?>