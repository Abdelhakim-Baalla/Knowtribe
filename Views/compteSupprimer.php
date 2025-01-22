<?php 

    // Définir une raison pour la suppression du compte.
    // Exemple de raison : une violation des conditions d'utilisation.
    $reason = "violation des conditions d'utilisation";

    // Message d'erreur incluant la raison
    $errorMessage = "Votre compte a été supprimé par l'administrateur, a la raison de la $reason.";

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Compte Supprimé</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="shortcut icon" href="../Assests/Images/logo.png" type="image/x-icon">
</head>
<body class="bg-gray-100 h-screen flex items-center justify-center">

    <div class="bg-white p-6 rounded-lg shadow-lg w-full max-w-md">
        <h2 class="text-2xl font-bold text-gray-700 text-center mb-6">Compte Supprimé</h2>

        <!-- Message d'erreur -->
        <?php if($errorMessage): ?>
            <div class="mb-4 p-4 bg-red-100 border-l-4 border-red-500 text-red-700 text-sm rounded-lg">
                <strong>Message :</strong> <?php echo $errorMessage; ?>
            </div>
        <?php endif; ?>

        <div class="text-center">
            <p class="text-lg text-gray-600">Votre compte a été supprimé définitivement. Cette action est irréversible.</p>
        </div>

        <div class="mt-6 text-center">
            <a href="mailto:abdelhakimbaalla50@gmail.com" class="text-blue-600 hover:underline text-sm">Contactez l'Administrateur</a>
        </div>

    </div>

</body>
</html>
