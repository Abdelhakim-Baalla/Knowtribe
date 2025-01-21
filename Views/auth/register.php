<?php 

    require_once("../../Controllers/Authlogin.php");
    $errorMessage = '';
    
    if(isset($_POST['register']))
    {
        if(empty($_POST['nom']) || empty($_POST['prenom']) || empty($_POST['email']) || empty($_POST['phone']) || empty($_POST['role']) || empty($_POST['password']) || empty($_POST['confirm_password']))
        {
            $errorMessage = 'Veuillez remplir toutes les entrées';
        }else if ($_POST['password'] != $_POST['confirm_password'])
        {
            $errorMessage = 'Les mots de passe ne correspondent pas';
        }else
        {
            $nom = $_POST['nom'];
            $prenom = $_POST['prenom'];
            $email = $_POST['email'];
            $phone = $_POST['phone'];
            $role = $_POST['role'];
            $password = $_POST['password'];
            $confirm_password = $_POST['confirm_password'];


            $register = new Authlogin();
            $tableName = 'utilisateur';
            $names = ['nom' => "'$nom'", 'prenom' => "'$prenom'", 'email' => "'$email'", 'phone' => "'$phone'", 'role_demander' => "'$role'", 'password' => "'$password'"];
            $register->register($tableName, $names);
        }
    }

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page d'inscription</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="shortcut icon" href="../../Assests/Images/login-logo.png" type="image/x-icon">
</head>
<body class="bg-gray-100 h-screen flex items-center justify-center">

    <div class="bg-white p-6 rounded-lg shadow-lg w-full max-w-md">
        <h2 class="text-2xl font-bold text-gray-700 text-center mb-6">Créez un compte</h2>

        <!-- Message d'erreur -->
        <?php if($errorMessage): ?>
            <div class="mb-4 p-4 bg-red-100 border-l-4 border-red-500 text-red-700 text-sm rounded-lg">
                <strong>Erreur :</strong> <?php echo $errorMessage; ?>
            </div>
        <?php endif; ?>
        
        <form action="#" method="POST">
            <!-- Nom -->
            <div class="mb-4">
                <label for="nom" class="block text-sm font-medium text-gray-600">Nom</label>
                <input 
                    type="text" 
                    id="nom" 
                    name="nom" 
                    class="w-full px-4 py-2 mt-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
                    placeholder="Entrez Votre Nom" 
                />
            </div>

            <!-- Prénom -->
            <div class="mb-4">
                <label for="prenom" class="block text-sm font-medium text-gray-600">Prénom</label>
                <input 
                    type="text" 
                    id="prenom" 
                    name="prenom" 
                    class="w-full px-4 py-2 mt-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
                    placeholder="Entrez Votre Prénom" 
                />
            </div>

            <!-- Email -->
            <div class="mb-4">
                <label for="email" class="block text-sm font-medium text-gray-600">Adresse e-mail</label>
                <input 
                    type="email" 
                    id="email" 
                    name="email" 
                    class="w-full px-4 py-2 mt-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
                    placeholder="Entrez votre email" 
                />
            </div>

            <!-- Téléphone -->
            <div class="mb-4">
                <label for="phone" class="block text-sm font-medium text-gray-600">Téléphone</label>
                <input 
                    type="tel" 
                    id="phone" 
                    name="phone" 
                    class="w-full px-4 py-2 mt-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
                    placeholder="Entrez votre numéro de téléphone" 
                />
            </div>

            <!-- Rôle -->
            <div class="mb-4">
                <label for="role" class="block text-sm font-medium text-gray-600">Rôle</label>
                <select 
                    id="role" 
                    name="role" 
                    class="w-full px-4 py-2 mt-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" 
                >
                    <option value="">Sélectionner Votre Rôle</option>
                    <option value="Enseignant">Enseignant</option>
                    <option value="Etudiant">Etudiant</option>
                </select>
            </div>

            <!-- Mot de passe -->
            <div class="mb-4">
                <label for="password" class="block text-sm font-medium text-gray-600">Mot de passe</label>
                <input 
                    type="password" 
                    id="password" 
                    name="password" 
                    class="w-full px-4 py-2 mt-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
                    placeholder="Créez un mot de passe" 
                />
            </div>

            <!-- Confirmer le mot de passe -->
            <div class="mb-6">
                <label for="confirm-password" class="block text-sm font-medium text-gray-600">Confirmer le mot de passe</label>
                <input 
                    type="password" 
                    id="confirm-password" 
                    name="confirm_password" 
                    class="w-full px-4 py-2 mt-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
                    placeholder="Confirmer le mot de passe" 
                />
            </div>

            <!-- Bouton de soumission -->
            <div>
                <button 
                    type="submit" 
                    class="w-full py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition duration-300"
                    name="register">
                    S'inscrire
                </button>
            </div>
        </form>

        <!-- Lien de connexion -->
        <div class="mt-4 text-center">
            <p class="text-sm">Vous avez déjà un compte ? <a href="login.php" class="text-blue-600 hover:underline">Connectez-vous ici</a></p>
        </div>
    </div>

</body>
</html>
