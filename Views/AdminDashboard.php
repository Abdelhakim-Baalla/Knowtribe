<?php 
    include ("../Controllers/UserController.php");
    $usercontroll = new UserController();
     
    
   

    // $id = 4;
    // $usercontroll-> Delete($id);
?>

<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Admin Dashboard | Youdemy</title>
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/1.8.12/tailwind-experimental.min.css'>
  <link rel="shortcut icon" href="../Assests/Images/logo.png" type="image/x-icon">
</head>
<body class="flex bg-gray-100 min-h-screen">


  <div class="flex-grow text-gray-800">
   
    <main class="p-6 sm:p-10 space-y-6">
      
    <section class = " backdrop-blur-sm w-full absolute flex justify-center items-center h-screen hidden " id = "formPopup">
                <form class="w-1/2 h-auto bg-gray-500 p-5 rounded-xl" action = "AdminDashboard.php" method = "post">
                <div>
                   <div class="mb-5">
                <label for="nom" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nom</label>
                <input type="text" id="nom" name = "nom" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"  />
                </div>
                <div class="mb-5">
                <label for="prenom" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Prenom</label>
                <input type="text" id="prenom" name = "prenom" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"  />
                </div>
                <div class="mb-5">
                <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email</label>
                <input type="email" id="email" name = "email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"  />
                </div>
                <div class="mb-5">
                <label for="phone" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Phone</label>
                <input type="text" id="phone" name = "phone" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"  />
                </div>
                <div class="mb-5">
                <label for="role" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Role</label>
                <div class="w-full flex justify-center">
                    <select name="role" id="role" class="w-[90%] rounded">
                    <option value="Admin">Admin</option>
                    <option value="Etudiant">Etudiant</option>
                    <option value="Enseignant">Enseignant</option>
                    </select>
                </div> 
                </div>


                </div>
                <button type="submit" name = "ajouterFormBtn" class="text-gray-900 bg-gradient-to-r from-teal-200 to-lime-200 hover:bg-gradient-to-l hover:from-teal-200 hover:to-lime-200 focus:ring-4 focus:outline-none focus:ring-lime-200 dark:focus:ring-teal-700 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2" id = "ajouterBtnForm">Ajouter</button>
                <button class="text-white bg-gradient-to-br from-pink-500 to-orange-400 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-pink-200 dark:focus:ring-pink-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2" id = "annulerBtnForm">Annuler</button>
                <!-- <button type="Ajoute" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Ajoute</button> -->
                </form>
            </section>
      <section class="flex flex-wrap gap-6">
       
       
        <div class="bg-white shadow rounded-lg w-full">
          <div class="flex items-center justify-between px-6 py-5 font-semibold border-b border-gray-100">
            <span>Les Utilisateurs</span>
            


           <?php 
            $ajouterFormBtn = $_POST['ajouterFormBtn'];           

            if(isset($ajouterFormBtn))
            {
                $nom = $_POST['nom'];
                $prenom = $_POST['prenom'];
                $email = $_POST['email'];
                $phone = $_POST['phone'];
                $role = $_POST['role'];

                if($role == 'Admin'){
                    $role = 17;
                }
    
                if($role == 'Etudiant'){
                    $role = 18;
                }
    
                if($role == 'Enseignant'){
                    $role = 19;
                } 

                $int = random_int(1, 100);
                $chars = 'abcdefghijklmnopqrstuvwxyz0123456789';
                $string = str_shuffle($chars);
                $mixed = $int . $string; 
                $generatedPassword = substr($mixed,1,8); 

                $names = ["nom" => "'$nom'", "prenom" => "'$prenom'", "email" => "'$email'", "password" => "'$generatedPassword'" , "phone" => "'$phone'" , "role_id" => "'$role'"];
                $usercontroll->CreeUtilisateur($names);
              

            
                unset($email);
             
            }
           ?>
            <!-- Refer here for full dropdown menu code: https://tailwindui.com/components/application-ui/elements/dropdowns -->
          </div>
          <div class="overflow-y-auto" style="max-height: 24rem;">
            <div class = "ml-8">
            <button type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-xs px-2 py-2 text-center inline-flex gap-2 items-center me-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" id = "ajouterUtilisateur">
              <svg width="10px" height="10px" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg" fill="#000000"><path d="M14 7v1H8v6H7V8H1V7h6V1h1v6h6z"/></svg>
               Ajouter
             </button>

              <button type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-xs px-2 py-2 text-center inline-flex gap-2 items-center me-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" id = "supprimmerUtilisateur">
              <svg fill="#000000" width="10px" height="10px" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M20,6H16V5a3,3,0,0,0-3-3H11A3,3,0,0,0,8,5V6H4A1,1,0,0,0,4,8H5V19a3,3,0,0,0,3,3h8a3,3,0,0,0,3-3V8h1a1,1,0,0,0,0-2ZM10,5a1,1,0,0,1,1-1h2a1,1,0,0,1,1,1V6H10Zm7,14a1,1,0,0,1-1,1H8a1,1,0,0,1-1-1V8H17Z"/></svg>
                  Supprimer
              </button>

            </div>
            <ul class="p-6 space-y-6">
            <section class = "w-full flex">
              <div class = "w-full px-2">
              <table class="w-full text-sm text-left border border-gray-200">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                    <tr>
                        <th class="px-1 py-1 border-black border-solid border-[1px]">Id</th>
                        <th class="px-1 py-1 border-black border-solid border-[1px]">Nom</th>
                        <th class="px-1 py-1 border-black border-solid border-[1px]">Prenom</th>
                        <th class="px-1 py-1 border-black border-solid border-[1px]">Email</th>
                        <th class="px-1 py-1 border-black border-solid border-[1px]">Phone</th>
                        <th class="px-1 py-1 border-black border-solid border-[1px]">Role</th>
                        <th class="px-1 py-1 border-black border-solid border-[1px]">Role Demander</th>
                        <th class="px-1 py-1 border-black border-solid border-[1px]">Status</th>
                   </tr>
                </thead>
                <tbody>
                    <tr class="bg-white border-b">
                        <td class="px-1 py-1 border-black border-solid border-[1px]"> <?php $finder = 'id'; $usercontroll->Users($finder);?></td>
                        <td class="px-1 py-1 border-black border-solid border-[1px]"> <?php $finder = 'nom'; $usercontroll->Users($finder);?></td>
                        <td class="px-1 py-1 border-black border-solid border-[1px]"> <?php $finder = 'prenom'; $usercontroll->Users($finder);?></td>
                        <td class="px-1 py-1 border-black border-solid border-[1px]"> <?php $finder = 'email'; $usercontroll->Users($finder);?></td>
                        <td class="px-1 py-1 border-black border-solid border-[1px]"> <?php $finder = 'phone'; $usercontroll->Users($finder);?></td>
                        <td class="px-1 py-1 border-black border-solid border-[1px]"> <?php $finder = 'role_id'; $usercontroll->convertFkToRole($finder);?></td>
                        <td class="px-1 py-1 border-black border-solid border-[1px]"> <?php $finder = 'role_demander'; $usercontroll->Users($finder);?></td>
                        <td class="px-1 py-1 border-black border-solid border-[1px]"> <?php $finder = 'status'; $usercontroll->Users($finder);?></td>
                    </tr>
                </tbody>
           
              </table>


            
              </div>
            </section>
            </ul>

    
          </div>
        </div>

        
        <section class = " backdrop-blur-sm w-full absolute flex justify-center items-center h-screen hidden" id = "formSupprimmerPopup">
                <form class="w-1/2 h-auto bg-gray-500 p-5 rounded-xl" action = "AdminDashboard.php" method = "post">
                <div>
                   
                <div class="mb-5">
                <label for="utilisateurSupprimer" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Selectioner L'utilisateur a supprimer</label>
                <div class="w-full flex justify-center">
                    <select name="utilisateurSupprimer" id="utilisateurSupprimer" class="w-[90%] rounded">
                    <option value="">Selectioner l'id de L'utilisateur</option>
                      <?php 
                        
                        echo  $usercontroll->deleteOption();
                      ?>
                      
                    </select>

                    
                </div> 
                </div>


                </div>
                <button type="submit" name = "supprimerBtnForm" class="text-white bg-gradient-to-r from-red-400 via-red-500 to-red-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2" id = "supprimerBtnForm">Supprimer</button>
                <!-- <button type="Ajoute" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Ajoute</button> -->
                </form>

            </section>
            <?php 
                
                $supprimerBtnForm = $_POST["supprimerBtnForm"];

                if(isset($supprimerBtnForm))
                {
                  $idToSupprimer = $_POST["utilisateurSupprimer"];
                  $usercontroll->Delete($idToSupprimer);
                  
                 
                }
                ?>
        
      </section>

      
     

    </main>
  </div>
  <script src="../Assests/src/JS/admin.js"></script>
</body>
</html>