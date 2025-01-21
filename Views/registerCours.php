<?php
session_start();

// Assurez-vous que l'étudiant est connecté
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php"); // Redirige vers la page de connexion si l'utilisateur n'est pas connecté
    exit();
}

include("../Controllers/CoursController.php");
$courscontroll = new CoursController();

// Vérifier si l'ID du cours est passé via l'URL
if (isset($_GET['id'])) {
    $cours_id = $_GET['id'];
    $user_id = $_SESSION['user_id']; // ID de l'étudiant connecté

    // Appel de la méthode pour inscrire l'étudiant au cours
    $courscontroll->inscrireEtudiantAuCours($user_id, $cours_id);

    // Redirection vers le tableau de bord de l'étudiant
    header("Location: dashboard.php"); // Changez cela si vous avez un autre fichier de tableau de bord
    exit();
} else {
    // Si l'ID du cours n'est pas passé, redirigez l'utilisateur
    header("Location: dashboard.php");
    exit();
}
