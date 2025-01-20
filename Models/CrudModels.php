<?php 

    require_once($_SERVER['DOCUMENT_ROOT'] . "/Youdemy/Data/Config/Connexion.php");

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
        public function FindAll($tableName, $finder)
        {
            $query = "SELECT * FROM " . $tableName;
            $stmt = $this->connexion->connexion()->prepare($query);
            $stmt->execute();
            $row = $stmt->fetchAll();

            foreach($row as $value)
            {
                if($value[$finder] == 17) 
                {
                    $value[$finder] = "Admin";
                }

                if($value[$finder] == 18) 
                {
                    $value[$finder] = "Etudiant";
                }

                if($value[$finder] == 19) 
                {
                    $value[$finder] = "Enseignant";
                }

                if($finder == 'photo') 
                {
                    $value[$finder] = "<img src = '{$value[$finder]}'>";
                }

                // if($finder == 'contenu') 
                // {
                //     $value[$finder] = $value[$finder] . "<br>" ;
                // }
                

                if ($finder == 'all' && $tableName == 'cours')
                {
                    $id = 'id';
                    $titre = 'titre';
                    $description = 'description';
                    $photo = 'photo';
                    $contenu = 'contenu';

                    $value[$photo] = "<img src = '{$value[$photo]}'>";

                     $value[$finder] = "<div class='bg-white border border-gray-200 rounded-lg p-4'>
                        <h3 class='text-xl font-semibold text-gray-800'>Id: $value[$id]</h3>
                        <h4 class='text-lg font-medium text-gray-700'>Titre: $value[$titre]</h4>
                        <p class='text-gray-600 mt-2'>Description: $value[$description]</p>
                        <div class='mt-4'>
                         $value[$photo]
                        </div>
                        <p class='mt-4 text-gray-700'>Contenu: $value[$contenu]</p>
                                </div>";
                }

                echo(  $value[$finder] . '<br>');
                
            } 

        }

        public function FindCours($tableName)
        {
            $query = "SELECT * FROM cours";
            $stmt = $this->connexion->connexion()->prepare($query);
            $stmt->execute();
            $row = $stmt->fetchAll();

            foreach($row as $key => $value)
            {
                echo "<div class='w-full sm:w-full md:w-full lg:w-1/3 p-6'>
           <div class='bg-white border border-gray-200 rounded-xl shadow-lg overflow-hidden transform hover:scale-105 transition duration-300'>
        <div class='relative'>
            <!-- Smaller Image Section -->
            <img src='{$value['photo']}' alt='Course Image' class='object-cover w-full md:h-32 lg:h-40 rounded-t-xl'>
        </div>
        <div class='p-4'>
            <!-- Course Title -->
            <h3 class='text-lg font-semibold text-gray-800 mb-2'>{$value['titre']}</h3>
            <!-- Course Description -->
            <p class='text-xs text-gray-600 mb-3'>{$value['description']}</p>

            <!-- Button Container with smaller buttons -->
            <div class='flex justify-center gap-2'>
                <!-- Register Button -->
                <a href='register.php?id={$value['id']}' class='bg-blue-600 text-white font-medium py-1 px-3 rounded-full hover:bg-blue-700 transition-all duration-300 text-sm'>
                    Register
                </a>
                <!-- Watch Video Button -->
                <a href='watch_video.php?id={$value['id']}' class='bg-green-600 text-white font-medium py-1 px-3 rounded-full hover:bg-green-700 transition-all duration-300 text-sm'>
                    Watch Video
                </a>
            </div>
        </div>
    </div>
</div>";





                
            } 

        }
 


        public function FindEmail($email,$password){
            $query = "SELECT * FROM utilisateur WHERE email = :email AND password = :password";
            $stmt = $this->connexion->connexion()->prepare($query);
            $stmt->bindParam(":email",$email);
            $stmt->bindParam(":password",$password);
            $stmt->execute();

            $emailCheck = $stmt->fetch();

            return $emailCheck;
        }


        public function loginByEmailAndPassword($email, $password)
        {
            $utilisateurData = $this->FindEmail($email,$password);

            return $utilisateurData;
        }


        public function FindAllTodelete($tableName)
        {
            $query = "SELECT * FROM " . $tableName ;
            $stmt = $this->connexion->connexion()->prepare($query);
            $stmt->execute();
            $row = $stmt->fetchAll();

            foreach($row as $value)
            {
                
                echo('<option>' . $value['id'] . '</option>');
                
            } 
        }

        // public function FindRole($tableName, $finder)
        // {
        //     $query = "SELECT * FROM " . $tableName ;
        //     $stmt = $this->connexion->connexion()->prepare($query);
        //     $stmt->execute();
        //     $row = $stmt->fetchAll();

        //     foreach($row as $value)
        //     {
        //         echo('<div style= "font-family: monospace" >' . $value[$finder] . '</div>' . '<br>');
        //     } 

        // }

        public function DeleteWithId($tableName, $id)
        {
            $query = "DELETE FROM " . $tableName . " WHERE id = " . $id;
            $stmt = $this->connexion->connexion()->prepare($query);
            $stmt->execute();
            // var_dump($stmt);
        }

        
    }






    // $nn = new CrudModels();
    // $tableName = 'roles';
    // // // $names = ['nom' => "'Admin'", 'description' => "'This is admin'"];
    // $nn->FindAll($tableName);

?>