<?php 

    include_once '../Data/Config/Connexion.php';

    class CrudModels
    {
        public $connexion;

        public function __construct()
        {
            $this->connexion = new Connexion();
        }

        // la fonctionne de la creation
        public function Create($tableName, $names)
        {
            $columns = implode(',',array_keys($names));
            $values = implode(',',array_values($names));
            $query = "INSERT INTO " . $tableName . "(" . $columns . ")" . "VALUES(" . $values . ")";
            
            $stmt = $this->connexion->connexion()->prepare($query);
            $stmt->execute();
        }

        // les fonctionnes de l'affichage
        public function FindAll($tableName)
        {
            $query = "SELECT * FROM " . $tableName ;
            $stmt = $this->connexion->connexion()->prepare($query);
            $stmt->execute();
            $row = $stmt->fetchAll();

            // foreach($row as $value)
            // {

            //     echo($value['id'] . '<br>');
            //     echo($value['nom'] . '<br>');
        
            //     echo('<br>');
            // }
        }

        
    }



    // $nn = new CrudModels();
    // $tableName = 'roles';
    // // // $names = ['nom' => "'Admin'", 'description' => "'This is admin'"];
    // $nn->FindAll($tableName);

?>