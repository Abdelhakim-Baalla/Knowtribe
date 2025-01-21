<?php 

    require_once("../../Controllers/Authlogin.php");
    if(isset($_POST['login']))
    {
        if(empty($_POST['email']) || empty($_POST['password']))
        {
            echo 'Please fill all inputs';
        }else
        {
            $email = $_POST['email'];
            $password = $_POST['password'];

            $login = new Authlogin();
            $login->login($email, $password);
        }
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="shortcut icon" href="../../Assests/Images/login-logo.png" type="image/x-icon">
</head>
<body class="bg-gray-100 h-screen flex items-center justify-center">

    <div class="bg-white p-8 rounded-lg shadow-lg w-full max-w-sm">
        <h2 class="text-2xl font-bold text-gray-700 text-center mb-6">Login</h2>
        
        <form action="#" method="POST">
            <!-- Email -->
            <div class="mb-4">
                <label for="email" class="block text-sm font-medium text-gray-600">Email Address</label>
                <input 
                    type="email" 
                    id="email" 
                    name="email" 
                    class="w-full px-4 py-2 mt-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
                    placeholder="Enter your email" 
                    required
                />
            </div>

            <!-- Password -->
            <div class="mb-6">
                <label for="password" class="block text-sm font-medium text-gray-600">Password</label>
                <input 
                    type="password" 
                    id="password" 
                    name="password" 
                    class="w-full px-4 py-2 mt-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
                    placeholder="Enter your password" 
                    required
                />
            </div>

            <!-- Submit Button -->
            <div>
                <button 
                    type="submit" 
                    class="w-full py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition duration-300"
                    name="login"
                    >
                    Login
                </button>
            </div>
        </form>

        <!-- Forgot Password -->
        <div class="mt-4 text-center">
            <a href="#" class="text-sm text-blue-600 hover:underline">Forgot your password?</a>
        </div>
    </div>

</body>
</html>
