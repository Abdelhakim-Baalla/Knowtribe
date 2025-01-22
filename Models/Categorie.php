<?php 
    include 'Etiquette.php';

    class Categorie extends Etiquette
    {
        public function __construct(){}

       

        public function __tostring()
        {
            return parent::__tostring();
        }
    }

//     $categorie = new Categorie();
//     $categorie->creeCategorie(1, "this is categorie", "description", "categorie logo");
//    echo $categorie->__tostring();
?>