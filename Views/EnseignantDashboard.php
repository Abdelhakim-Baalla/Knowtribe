<?php 
    include ("../Controllers/CoursController.php");
    $courscontroll = new CoursController();
    // $id = 4;
    // $usercontroll-> Delete($id);
?>

<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Enseignant Dashboard | Youdemy</title>
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/1.8.12/tailwind-experimental.min.css'>
  <link rel="shortcut icon" href="../Assests/Images/logo.png" type="image/x-icon">
</head>
<body class="flex bg-gray-100 min-h-screen">
<section class = " backdrop-blur-sm w-full absolute flex justify-center items-center h-screen hidden z-50" id = "formEnseigantPopup">
                <form class="w-1/2 h-auto bg-gray-500 p-5 rounded-xl" action = "EnseignantDashboard.php" method = "post">
                <div>
                   <div class="mb-5">
                <label for="titre" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Titre</label>
                <input type="text" id="titre" name = "titre" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"  />
                </div>
                <div class="mb-5">
                <label for="description" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Description</label>
                <input type="text" id="description" name = "description" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"  />
                </div>
                <div class="mb-5">
                <label for="photo" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Photo Url</label>
                <input type="text" id="photo" name = "photo" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"  />
                </div>
                <div class="mb-5">
                <label for="contenu" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Contenu</label>
                <input type="text" id="contenu" name = "contenu" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"  />
                </div>
                <!-- <div class="mb-5">
                <label for="categorie" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Categorie</label>
                <div class="w-full flex justify-center">
                    <select name="categorie" id="categorie" class="w-[90%] rounded">
                    <option value="Admin">Admin</option>
                    <option value="Etudiant">Etudiant</option>
                    <option value="Enseignant">Enseignant</option>
                    </select>
                </div> 
                </div> -->

                <!-- <div class="mb-5">
                <label for="tags" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tags</label>
                <div class="w-full flex justify-center">
                    <select name="tags" id="tags" class="w-[90%] rounded">
                    <option value="Admin">Admin</option>
                    <option value="Etudiant">Etudiant</option>
                    <option value="Enseignant">Enseignant</option>
                    </select>
                </div> 
                </div> -->


                </div>
                <button type="submit" name = "ajouterFormBtnCours" class="text-gray-900 bg-gradient-to-r from-teal-200 to-lime-200 hover:bg-gradient-to-l hover:from-teal-200 hover:to-lime-200 focus:ring-4 focus:outline-none focus:ring-lime-200 dark:focus:ring-teal-700 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2" id = "ajouterBtnForm">Ajouter</button>
                <button class="text-white bg-gradient-to-br from-pink-500 to-orange-400 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-pink-200 dark:focus:ring-pink-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2" id = "annulerBtnFormCours">Annuler</button>
                <!-- <button type="Ajoute" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Ajoute</button> -->
                </form>
</section>
  <aside class="hidden sm:flex sm:flex-col">
    <a href="#" class="inline-flex items-center justify-center h-20 w-20 bg-gray-800">
      <svg fill="none" viewBox="0 0 64 64" class="h-12 w-12">
        <title>Company logo</title>
        <img src="../Assests/Images/logo.png" alt="">
      </svg>
    </a>
    <div class="flex-grow flex flex-col justify-between text-gray-500 bg-gray-800">
      <div class="inline-flex items-center justify-center h-20 w-20 border-t border-gray-700">
      
      </div>
    </div>
  </aside>
  
  <div class="flex-grow text-gray-800">
    <header class="flex items-center h-20 px-6 sm:px-10 bg-white">
      
      
      <div class="flex flex-shrink-0 items-center ml-auto">
        <button class="inline-flex items-center p-2 hover:bg-gray-100 focus:bg-gray-100 rounded-lg">
          <span class="sr-only">User Menu</span>
          <div class="hidden md:flex md:flex-col md:items-end md:leading-tight">
            <span class="font-semibold">Byte Webster</span>
            <span class="text-sm text-gray-600">Computer Programmer</span>
          </div>
          <span class="h-12 w-12 ml-2 sm:ml-3 mr-2 bg-gray-100 rounded-full overflow-hidden">
            <img src="https://bytewebster.com/img/logo.png" alt="user profile photo" class="h-full w-full object-cover">
          </span>
          <svg aria-hidden="true" viewBox="0 0 20 20" fill="currentColor" class="hidden sm:block h-6 w-6 text-gray-300">
            <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
          </svg> 
        </button>
        <div class="border-l pl-3 ml-3 space-x-1">
          <button class="relative p-2 text-gray-400 hover:bg-gray-100 hover:text-gray-600 focus:bg-gray-100 focus:text-gray-600 rounded-full">
            <span class="sr-only">Notifications</span>
            <span class="absolute top-0 right-0 h-2 w-2 mt-1 mr-2 bg-red-500 rounded-full"></span>
            <span class="absolute top-0 right-0 h-2 w-2 mt-1 mr-2 bg-red-500 rounded-full animate-ping"></span>
            <svg aria-hidden="true" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="h-6 w-6">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" />
            </svg>
          </button>
          <button class="relative p-2 text-gray-400 hover:bg-gray-100 hover:text-gray-600 focus:bg-gray-100 focus:text-gray-600 rounded-full">
            <span class="sr-only">Log out</span>
            <svg aria-hidden="true" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="h-6 w-6">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
            </svg>
          </button>
        </div>
      </div>
    </header>
    
    <main class="p-6 sm:p-10 space-y-6">
     
     
      <section class="flex flex-wrap gap-6">
       
        <div class="bg-white shadow rounded-lg w-full">
          <div class="flex items-center justify-between px-6 py-5 font-semibold border-b border-gray-100">
            <span>Les Cours</span>
            <?php 
            $ajouterFormBtn = $_POST['ajouterFormBtnCours'];           

            if(isset($ajouterFormBtn))
            {
                $titre = $_POST['titre'];
                $description = $_POST['description'];
                $photo = $_POST['photo'];
                $contenu = $_POST['contenu'];

                $names = ["titre" => "'$titre'", "description" => "'$description'", "photo" => "'$photo'", "contenu" => "'$contenu'"];
                $courscontroll->CreeCours($names);
             
            }
           ?>
          </div>
          <div class="overflow-y-auto" >
            <div class = "ml-8">
            <button type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-xs px-2 py-2 text-center inline-flex gap-2 items-center me-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" id = "ajouterCours">
              <svg width="10px" height="10px" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg" fill="#000000"><path d="M14 7v1H8v6H7V8H1V7h6V1h1v6h6z"/></svg>
               Ajouter
             </button>

              <button type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-xs px-2 py-2 text-center inline-flex gap-2 items-center me-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" id = "supprimmerCours">
              <svg fill="#000000" width="10px" height="10px" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M20,6H16V5a3,3,0,0,0-3-3H11A3,3,0,0,0,8,5V6H4A1,1,0,0,0,4,8H5V19a3,3,0,0,0,3,3h8a3,3,0,0,0,3-3V8h1a1,1,0,0,0,0-2ZM10,5a1,1,0,0,1,1-1h2a1,1,0,0,1,1,1V6H10Zm7,14a1,1,0,0,1-1,1H8a1,1,0,0,1-1-1V8H17Z"/></svg>
                  Supprimer
              </button>

            </div>
            <ul class="p-6 space-y-6">
            <section class = "w-full flex">
            <div class = "w-full px-2 ">
            <div class="flex flex-wrap justify-center">
            <?php $courscontroll->Cours(); ?>
            </div>



            
            </div>
          </section>
            </ul>
          </div>
        </div>
        
        <section class = " backdrop-blur-sm w-full absolute flex justify-center items-center h-screen hidden" id = "formSupprimmerPopup">
                <form class="w-1/2 h-auto bg-gray-500 p-5 rounded-xl" action = "EnseignantDashboard.php" method = "post">
                <div>
                   
                <div class="mb-5">
                <label for="utilisateurSupprimer" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Selectioner L'utilisateur a supprimer</label>
                <div class="w-full flex justify-center">
                    <select name="utilisateurSupprimer" id="utilisateurSupprimer" class="w-[90%] rounded">
                    <option value="">Selectioner l'id de L'utilisateur</option>
                      <?php 
                        echo  $courscontroll->deleteOption();
    
                      ?>
                      
                    </select>

                    
                </div> 
                </div>


                </div>
                <button type="submit" name = "supprimerBtnForm" class="text-white bg-gradient-to-r from-red-400 via-red-500 to-red-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2" id = "supprimerBtnForm">Supprimer</button>
                </form>

            </section>
            <?php 
                
                $supprimerBtnForm = $_POST["supprimerBtnForm"];

                if(isset($supprimerBtnForm))
                {
                    $idToSupprimer = $_POST["utilisateurSupprimer"];
                    $courscontroll->Delete($idToSupprimer);
                  
                 
                }
                ?>
        
      </section>
    </main>
  </div>
  <script src = "../Assests/src/JS/enseignant.js" ></script>
</body>
</html>