<?php
include('../Models/CrudModels.php');

$crudmodels = new CrudModels();
$courseId = $_GET['id'];

// Fetch the course details from the database
// Assume there's a 'courses' table with columns 'id', 'titre', 'description', and 'video_url'
$query = "SELECT * FROM cours WHERE id = " . $courseId;
$stmt = $crudmodels->connexion->connexion()->prepare($query);
$stmt->execute();
$course = $stmt->fetch();

if ($course) {
    $videoUrl = $course['contenu']; // Get the video URL
} else {
    // Handle case when course is not found
    echo "<p>Course not found.</p>";
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo ($course['titre']); ?></title>
    <link rel="shortcut icon" href="../Assests/Images/logo.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">

    <!-- Navbar or Header -->
    <header class="bg-blue-600 text-white py-4">
        <div class="container mx-auto flex items-center justify-between">
            <h1 class="text-2xl font-bold">Youdemy</h1>
            <nav>
                <a href="../index.html" class="text-white hover:underline">Page Principale</a>
            </nav>
        </div>
    </header>
        <div class="flex justify-center mt-5">
            <a href="EnseignantDashboard.php" class="bg-blue-500 text-white font-semibold py-2 px-4 rounded-lg hover:bg-blue-600">
                Retouner a Dashboard
            </a>
        </div>

    <!-- Main Content Section -->
    <main class="container mx-auto p-6">
        <div class="max-w-4xl mx-auto bg-white p-6 rounded-lg shadow-lg">

            <!-- Course Title and Description -->
            <div class="text-center mb-6">
                <h2 class="text-3xl font-semibold text-gray-800"><?php echo htmlspecialchars($course['titre']); ?></h2>
                <p class="text-sm text-gray-600 mt-2"><?php echo nl2br(htmlspecialchars($course['description'])); ?></p>
            </div>

            <!-- Video Embed Section -->
            <div class="flex justify-center mb-6">
                <div class="w-full lg:w-3/4 aspect-w-16 aspect-h-9 flex justify-center">
                    <?php if ($videoUrl): ?>
                        <?php echo ($videoUrl); ?>
                    <?php else: ?>
                        <p class="text-red-500">Video not available.</p>
                    <?php endif; ?>
                </div>
            </div>

          
            
        </div>
    </main>
    
    <!-- Footer Section -->
    <footer class="bg-gray-800 text-white py-4 mt-8">
        <div class="container mx-auto text-center">
            <p>&copy; 2025 Course Platform. All rights reserved.</p>
        </div>
    </footer>

</body>
</html>
