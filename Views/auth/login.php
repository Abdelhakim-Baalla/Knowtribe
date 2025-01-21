<?php 

    require_once("../../Controllers/Authlogin.php");
    $errorMessage = '';

    if(isset($_POST['login']))
    {
        session_start();

        if(empty($_POST['email']) || empty($_POST['password']))
        {
            $errorMessage = 'Veuillez remplir toutes les entrées';

        }else
        {
            $email = $_POST['email'];
            $password = $_POST['password'];

            $_SESSION['email'] = $email;
            $_SESSION['password'] = $password;

            $login = new Authlogin();
            $login->login($email, $password);
        }
    }

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page de Connexion</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="shortcut icon" href="../../Assests/Images/login-logo.png" type="image/x-icon">
</head>
<body class="bg-gray-100 h-screen flex items-center justify-center">

    <div class="bg-white p-8 rounded-lg shadow-lg w-full max-w-sm">
        <h2 class="text-2xl font-bold text-gray-700 text-center mb-6">Connexion</h2>

        <!-- Message d'erreur -->
        <?php if($errorMessage): ?>
            <div class="mb-4 p-4 bg-red-100 border-l-4 border-red-500 text-red-700 text-sm rounded-lg">
                <strong>Erreur :</strong> <?php echo $errorMessage; ?>
            </div>
        <?php endif; ?>
        
        <form action="#" method="POST">
            <!-- Email -->
            <div class="mb-4">
                <label for="email" class="block text-sm font-medium text-gray-600">Adresse Email</label>
                <input 
                    type="email" 
                    id="email" 
                    name="email" 
                    value="<?php session_start(); if(empty($_SESSION['email'])){echo '';}else{echo $_SESSION['email'];}?>"
                    class="w-full px-4 py-2 mt-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
                    placeholder="Entrez votre email" 
                    required
                />
            </div>

            <!-- Mot de passe -->
            <div class="mb-6">
                <label for="password" class="block text-sm font-medium text-gray-600">Mot de passe</label>
                <input 
                    type="password" 
                    id="password" 
                    name="password" 
                    class="w-full px-4 py-2 mt-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
                    placeholder="Entrez votre mot de passe" 
                    required
                />
            </div>

            <!-- Bouton de soumission -->
            <div>
                <button 
                    type="submit" 
                    class="w-full py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition duration-300"
                    name="login"
                >
                    Connexion
                </button>
            </div>
        </form>

        <!-- Mot de passe oublié -->
        <div class="mt-4 text-center">
            <a href="#" class="text-sm text-blue-600 hover:underline">Mot de passe oublié ?</a>
        </div>
    </div>

</body>
</html>
