<?php
session_start();

if (!isset($_GET['id'])) {
    header("Location: auth/login.php");
    exit();
}
$_SESSION['id_cours'] = $_GET['id'];
// echo $_SESSION['id_cours'];
// echo $_SESSION['id_user'];

include("../Controllers/CoursController.php");
$courscontroll = new CoursController();


if (isset($_SESSION['id_cours'])) {
    $cours_id = $_SESSION['id_cours'];
    $utilisateur_id = $_SESSION['id_user'];

    $courscontroll->inscrireEtudiantAuCours($utilisateur_id, $cours_id);

    exit();
}
