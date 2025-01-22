<?php
require_once($_SERVER['DOCUMENT_ROOT'] . "/Youdemy/Models/CrudModels.php");

    class Authlogin
    {

        public function login($email, $password){
            $utilisateurData = new CrudModels();
            $utilisateur = $utilisateurData->loginByEmailAndPassword($email, $password);
            $_SESSION['id_user'] = $utilisateur['id'];
            if($utilisateur['role_id'] == 17){
                header("location: ../AdminDashboard.php?id={$_SESSION['id_user']}");
            } 
            if ($utilisateur['role_id'] == 18){
                header("location: ../Etudiant.php?id={$_SESSION['id_user']}");
            }  
            if ($utilisateur['role_id'] == 19){
                header("location: ../EnseignantDashboard.php?id={$_SESSION['id_user']}'");
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