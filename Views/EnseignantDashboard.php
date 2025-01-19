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
  <title>Enseignant Dashboard | Youdemy</title>
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/1.8.12/tailwind-experimental.min.css'>
  <link rel="shortcut icon" href="../Assests/Images/logo.png" type="image/x-icon">
</head>
<body class="flex bg-gray-100 min-h-screen">
  <aside class="hidden sm:flex sm:flex-col">
    <a href="#" class="inline-flex items-center justify-center h-20 w-20 bg-purple-600 hover:bg-purple-500 focus:bg-purple-500">
      <svg fill="none" viewBox="0 0 64 64" class="h-12 w-12">
        <title>Company logo</title>
        <path d="M32 14.2c-8 0-12.9 4-14.9 11.9 3-4 6.4-5.6 10.4-4.5 2.3.6 4 2.3 5.7 4 2.9 3 6.3 6.4 13.7 6.4 7.9 0 12.9-4 14.8-11.9-3 4-6.4 5.5-10.3 4.4-2.3-.5-4-2.2-5.7-4-3-3-6.3-6.3-13.7-6.3zM17.1 32C9.2 32 4.2 36 2.3 43.9c3-4 6.4-5.5 10.3-4.4 2.3.5 4 2.2 5.7 4 3 3 6.3 6.3 13.7 6.3 8 0 12.9-4 14.9-11.9-3 4-6.4 5.6-10.4 4.5-2.3-.6-4-2.3-5.7-4-2.9-3-6.3-6.4-13.7-6.4z" fill="#fff"/>
      </svg>
    </a>
    <div class="flex-grow flex flex-col justify-between text-gray-500 bg-gray-800">
      <nav class="flex flex-col mx-4 my-6 space-y-4">
        <a href="#" class="inline-flex items-center justify-center py-3 hover:text-gray-400 hover:bg-gray-700 focus:text-gray-400 focus:bg-gray-700 rounded-lg">
          <span class="sr-only">Folders</span>
          <svg aria-hidden="true" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="h-6 w-6">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 7v10a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2h-6l-2-2H5a2 2 0 00-2 2z" />
          </svg>
        </a>
        <a href="#" class="inline-flex items-center justify-center py-3 text-purple-600 bg-white rounded-lg">
          <span class="sr-only">Dashboard</span>
          <svg aria-hidden="true" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="h-6 w-6">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z" />
          </svg>
        </a>
        <a href="#" class="inline-flex items-center justify-center py-3 hover:text-gray-400 hover:bg-gray-700 focus:text-gray-400 focus:bg-gray-700 rounded-lg">
          <span class="sr-only">Messages</span>
          <svg aria-hidden="true" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="h-6 w-6">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
          </svg>
        </a>
        <a href="#" class="inline-flex items-center justify-center py-3 hover:text-gray-400 hover:bg-gray-700 focus:text-gray-400 focus:bg-gray-700 rounded-lg">
          <span class="sr-only">Documents</span>
          <svg aria-hidden="true" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="h-6 w-6">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21h10a2 2 0 002-2V9.414a1 1 0 00-.293-.707l-5.414-5.414A1 1 0 0012.586 3H7a2 2 0 00-2 2v14a2 2 0 002 2z" />
          </svg>
        </a>
      </nav>
      <div class="inline-flex items-center justify-center h-20 w-20 border-t border-gray-700">
        <button class="p-3 hover:text-gray-400 hover:bg-gray-700 focus:text-gray-400 focus:bg-gray-700 rounded-lg">
          <span class="sr-only">Settings</span>
          <svg aria-hidden="true" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="h-6 w-6">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
          </svg>
        </button>
      </div>
    </div>
  </aside>
  <div class="flex-grow text-gray-800">
    <header class="flex items-center h-20 px-6 sm:px-10 bg-white">
      <button class="block sm:hidden relative flex-shrink-0 p-2 mr-2 text-gray-600 hover:bg-gray-100 hover:text-gray-800 focus:bg-gray-100 focus:text-gray-800 rounded-full">
        <span class="sr-only">Menu</span>
          <svg aria-hidden="true" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="h-6 w-6">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h7" />
        </svg>
      </button>
      <div class="relative w-full max-w-md sm:-ml-2">
        <svg aria-hidden="true" viewBox="0 0 20 20" fill="currentColor" class="absolute h-6 w-6 mt-2.5 ml-2 text-gray-400">
          <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd" />
        </svg>
        <input type="text" role="search" placeholder="Quick Search" class="py-2 pl-10 pr-4 w-full border-4 border-transparent placeholder-gray-400 focus:bg-gray-50 rounded-lg" />
      </div>
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
      <div class="flex flex-col space-y-6 md:space-y-0 md:flex-row justify-between">
        <div class="mr-6">
          <h1 class="text-4xl font-semibold mb-2">Welcome To Dashboard</h1>
          <h2 class="text-gray-600 ml-0.5">We Provide Free resources regarding web design and web development</h2>
        </div>
        <div class="flex flex-wrap items-start justify-end -mb-3">
          <button class="inline-flex px-5 py-3 text-purple-600 hover:text-purple-700 focus:text-purple-700 hover:bg-purple-100 focus:bg-purple-100 border border-purple-600 rounded-md mb-3">
            <svg aria-hidden="true" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="flex-shrink-0 h-5 w-5 -ml-1 mt-0.5 mr-2">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
            </svg>
            Manage dashboard
          </button>
          <button class="inline-flex px-5 py-3 text-white bg-purple-600 hover:bg-purple-700 focus:bg-purple-700 rounded-md ml-6 mb-3">
            <svg aria-hidden="true" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="flex-shrink-0 h-6 w-6 text-white -ml-1 mr-2">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
            </svg>
            Create new dashboard
          </button>
        </div>
      </div>
      <section class="grid md:grid-cols-2 xl:grid-cols-4 gap-6">
        <div class="flex items-center p-8 bg-white shadow rounded-lg">
          <div class="inline-flex flex-shrink-0 items-center justify-center h-16 w-16 text-purple-600 bg-purple-100 rounded-full mr-6">
            <svg aria-hidden="true" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="h-6 w-6">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
            </svg>
          </div>
          <div>
            <span class="block text-2xl font-bold">89562</span>
            <span class="block text-gray-500">Daily Unique Visitors</span>
          </div>
        </div>
        <div class="flex items-center p-8 bg-white shadow rounded-lg">
          <div class="inline-flex flex-shrink-0 items-center justify-center h-16 w-16 text-green-600 bg-green-100 rounded-full mr-6">
            <svg aria-hidden="true" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="h-6 w-6">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6" />
            </svg>
          </div>
          <div>
            <span class="block text-2xl font-bold">27.6%</span>
            <span class="block text-gray-500">CTR</span>
          </div>
        </div>
        <div class="flex items-center p-8 bg-white shadow rounded-lg">
          <div class="inline-flex flex-shrink-0 items-center justify-center h-16 w-16 text-red-600 bg-red-100 rounded-full mr-6">
            <svg aria-hidden="true" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="h-6 w-6">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 17h8m0 0V9m0 8l-8-8-4 4-6-6" />
            </svg>
          </div>
          <div>
            <span class="inline-block text-2xl font-bold">3m 45s</span>
            <span class="inline-block text-xl text-gray-500 font-semibold">(-32%)</span>
            <span class="block text-gray-500">Average Engagement Time</span>
          </div>
        </div>
        <div class="flex items-center p-8 bg-white shadow rounded-lg">
          <div class="inline-flex flex-shrink-0 items-center justify-center h-16 w-16 text-blue-600 bg-blue-100 rounded-full mr-6">
            <svg aria-hidden="true" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="h-6 w-6">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
            </svg>
          </div>
          <div>
            <span class="block text-2xl font-bold">956326</span>
            <span class="block text-gray-500">Event Count</span>
          </div>
        </div>
      </section>
      <section class="flex flex-wrap gap-6">
        <div class="flex flex-col md:col-span-2 md:row-span-2 bg-white shadow rounded-lg">
          <div class="px-6 py-5 font-semibold border-b border-gray-100">Your insights will appear here soon.</div>
          <div class="p-4 flex-grow">
            <div class="flex items-center justify-center h-full px-4 py-16 text-gray-400 text-3xl font-semibold bg-gray-100 border-2 border-gray-200 border-dashed rounded-md">Chart</div>
          </div>
        </div>
        <div class="flex items-center p-8 bg-white shadow rounded-lg">
          <div class="inline-flex flex-shrink-0 items-center justify-center h-16 w-16 text-yellow-600 bg-yellow-100 rounded-full mr-6">
            <svg aria-hidden="true" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="h-6 w-6">
              <path fill="#fff" d="M12 14l9-5-9-5-9 5 9 5z" />
              <path fill="#fff" d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z" />
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14zm-4 6v-7.5l4-2.222" />
            </svg>
          </div>
          <div>
            <span class="block text-2xl font-bold">25</span>
            <span class="block text-gray-500">Lections left</span>
          </div>
        </div>
        <div class="flex items-center p-8 bg-white shadow rounded-lg">
          <div class="inline-flex flex-shrink-0 items-center justify-center h-16 w-16 text-teal-600 bg-teal-100 rounded-full mr-6">
            <svg aria-hidden="true" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="h-6 w-6">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
            </svg>
          </div>
          <div>
            <span class="block text-2xl font-bold">139</span>
            <span class="block text-gray-500">Hours spent on lections</span>
          </div>
        </div>
        <div class="bg-white shadow rounded-lg w-full">
          <div class="flex items-center justify-between px-6 py-5 font-semibold border-b border-gray-100">
            <span>Les Utilisateurs</span>
            <section class = " backdrop-blur-sm w-full absolute flex justify-center items-center h-screen hidden " id = "formPopup">
                <form class="w-1/2 h-auto bg-gray-500 p-5 rounded-xl" action = "AdminDashboard.php" method = "post">
                <div>
                   <div class="mb-5">
                <label for="nom" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nom</label>
                <input type="text" id="nom" name = "nom" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required />
                </div>
                <div class="mb-5">
                <label for="prenom" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Prenom</label>
                <input type="text" id="prenom" name = "prenom" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required />
                </div>
                <div class="mb-5">
                <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email</label>
                <input type="email" id="email" name = "email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required />
                </div>
                <div class="mb-5">
                <label for="phone" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Phone</label>
                <input type="text" id="phone" name = "phone" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required />
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
                        <th class="px-1 py-1 border-black border-solid border-[1px]">Delete</th>
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
        <div class="flex flex-col row-span-3 bg-white shadow rounded-lg">
          <div class="px-6 py-5 font-semibold border-b border-gray-100">WHAT ARE YOUR TOP CAMPAIGNS?</div>
          <div class="p-4 flex-grow">
            <div class="flex items-center justify-center h-full px-4 py-24 text-gray-400 text-3xl font-semibold bg-gray-100 border-2 border-gray-200 border-dashed rounded-md">Chart</div>
          </div>
        </div>
      </section>
    </main>
  </div>
  <script src="../Assests/src/JS/admin.js"></script>
</body>
</html>