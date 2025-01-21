<?php 
    include ("../Controllers/CoursController.php");
    $courscontroll = new CoursController();
    // Vous pouvez ici ajouter une gestion de l'utilisateur connecté pour afficher uniquement ses cours inscrits.
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Étudiant | Youdemy</title>
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.15/dist/tailwind.min.css" rel="stylesheet">
  <link rel="shortcut icon" href="../Assests/Images/logo.png" type="image/x-icon">
</head>
<body class="flex bg-gray-100 min-h-screen">

<!-- Sidebar -->
<aside class="bg-gray-800 text-white p-6 hidden sm:block">
    <div class="flex justify-center items-center mb-8">
        <img src="../Assests/Images/logo.png" alt="Logo" class="h-16">
    </div>
</aside>

<!-- Main Content -->
<div class="flex-1 flex flex-col">
  <!-- Header -->
  <header class="bg-white shadow-lg flex justify-between items-center p-6">
    <div class="flex items-center space-x-4">
      <button id="toggleSidebar" class="sm:hidden">
        <svg class="h-6 w-6 text-gray-600" fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
        </svg>
      </button>
      <span class="font-semibold text-xl text-gray-800">Tableau de bord Étudiant</span>
    </div>
    <div class="flex items-center space-x-4">
      <button class="text-gray-600 hover:text-gray-900 focus:outline-none">
        <svg class="h-6 w-6" fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
        </svg>
      </button>
    </div>
  </header>

  <!-- Main Content Section -->
  <main class="flex-1 p-6">
    <!-- Available Courses -->
    <section class="bg-white shadow-md rounded-lg p-6 mb-8">
      <div class="flex justify-between items-center mb-4">
        <h2 class="text-2xl font-semibold text-gray-800">Cours Disponibles</h2>
      </div>

      <div class="flex flex-wrap">
        <!-- Dynamically load available courses -->
        <?php
            $courscontroll->AfficherCoursDisponibles();
            
        ?>
      </div>
    </section>

    <!-- Enrolled Courses -->
    <section class="bg-white shadow-md rounded-lg p-6">
      <div class="flex justify-between items-center mb-4">
        <h2 class="text-2xl font-semibold text-gray-800">Mes Cours Inscrits</h2>
      </div>

      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        <?php
             
        ?>
      </div>
    </section>
  </main>
</div>

<!-- JavaScript for managing dynamic content -->
<script>
  document.getElementById("toggleSidebar").addEventListener("click", function() {
    document.querySelector("aside").classList.toggle("hidden");
  });
</script>

</body>
</html>
