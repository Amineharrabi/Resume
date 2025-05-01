<?php
// Include configuration file
require_once 'includes/config.php';
require_once 'includes/functions.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Science Portfolio - Amine harrabi</title>
    <meta name="description" content="Professional portfolio and resume of John Doe, Data Science student">
    
    <!-- Favicon -->
    <link rel="icon" type="image/svg+xml" href="https://cdn.jsdelivr.net/npm/feather-icons/dist/icons/database.svg">
    
    <!-- CSS Files -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/dark-mode.css">
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <!-- AOS Animation Library -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=JetBrains+Mono:wght@400;700&display=swap" rel="stylesheet">
</head>
<body>
    <!-- Theme toggle button -->
    <button id="theme-toggle" aria-label="Toggle dark mode">
        <i class="fa-solid fa-moon"></i>
        <i class="fa-solid fa-sun"></i>
    </button>

    <!-- Header/Navigation -->
    <?php include('sections/header.php'); ?>

    <main>
        <!-- Home/Introduction Section -->
        <?php include('sections/home.php'); ?>

        <!-- Education Section -->
        <?php include('sections/education.php'); ?>

        <!-- Skills Section -->
        <?php include('sections/skills.php'); ?>

        <!-- Experience Section -->
        <?php include('sections/experience.php'); ?>

        <!-- Projects Section -->
        <?php include('sections/projects.php'); ?>

        <!-- Portfolio/Gallery Section -->
        <?php include('sections/portfolio.php'); ?>

        <!-- Contact Section -->
        <?php include('sections/contact.php'); ?>
    </main>

    <!-- Footer -->
    <?php include('sections/footer.php'); ?>

    <!-- JavaScript Files -->
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        // Initialize AOS (Animate on Scroll)
        AOS.init({
            duration: 800,
            easing: 'ease-in-out',
            once: true
        });
    </script>
    <script src="js/main.js"></script>
    <script src="js/form-validation.js"></script>
    <script src="js/dark-mode.js"></script>
</body>
</html>
