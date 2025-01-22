<?php 
    include 'Etiquette.php';

    class Tag extends Etiquette
    {
        public function __construct(){}

        

        public function __toString()
        {
            return parent::__toString();
        }
    }

//     $tag = new tag();
//     $tag->creeTag(1, "this is tag", "description", "taglogo");
//    echo $tag->__tostring();
?>