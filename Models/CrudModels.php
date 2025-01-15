<?php 

    include_once '../Data/Config/Connexion.php';

    class CrudModels
    {
        public $connexion;

        public function __construct()
        {
            $this->connexion = new Connexion();
        }

        public function Create($tableName, $names)
        {
            $columns = implode(',',array_keys($names));
            $values = implode(',',array_values($names));
            var_dump($values);
            // if (gettype($values) == string ){
            //     $values = "'" . $values . "'";
            // }
            $query = "INSERT INTO " . $tableName . "(" . $columns . ")" . "VALUES(" . $values . ")";
            var_dump($query);
        }

        public function Addcolontokeys($array)
        {
            $newarray = [];
            foreach($array as $key => $value)
            {
                $newarray[] = ':'.$key;
    
            }
            $nexarray =  implode(',',$newarray);
            return $nexarray;
        }
    }

    $nn = new CrudModels();
    $tableName = 'Utilisateur';
    $names = ['id' => 1, 'FirstName' => 'Dino', 'LastName' => 'Crafting'];
    $nn->Create($tableName, $names);

?>