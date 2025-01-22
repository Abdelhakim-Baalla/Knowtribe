<?php
// Définir un message d'erreur générique
$errorMessage = "Une erreur est survenue lors de la tentative de connexion. Veuillez contacter l'administrateur du site pour assistance.";
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Erreur de Connexion</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="shortcut icon" href="../Assests/Images/logo.png" type="image/x-icon">
</head>
<body class="bg-gray-100 h-screen flex items-center justify-center">

    <div class="bg-white p-6 rounded-lg shadow-lg w-full max-w-md">
        <h2 class="text-2xl font-bold text-gray-700 text-center mb-6">Erreur de Connexion</h2>

        <!-- Message d'erreur -->
        <?php if($errorMessage): ?>
            <div class="mb-4 p-4 bg-red-100 border-l-4 border-red-500 text-red-700 text-sm rounded-lg">
                <strong>Erreur :</strong> <?php echo $errorMessage; ?>
            </div>
        <?php endif; ?>

        <div class="text-center mb-6">
            <p class="text-lg text-gray-600">Il semble qu'un problème soit survenu pendant votre tentative de connexion. Si ce problème persiste, nous vous invitons à contacter l'administrateur du site pour assistance.</p>
        </div>

        <div class="text-center mt-6">
            <!-- Lien pour contacter l'administrateur -->
            <a href="mailto:abdelhakimbaalla50@gmail.com" class="text-blue-600 hover:underline text-sm">Contacter l'Administrateur</a>
        </div>

        <div class="text-center mt-4">
            <!-- Lien pour revenir à la page de connexion -->
            <a href="auth/login.php" class="text-blue-600 hover:underline text-sm">Retour à la page de connexion</a>
        </div>

    </div>

</body>
</html>
