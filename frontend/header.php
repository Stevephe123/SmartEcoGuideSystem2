<!DOCTYPE html>
<?php
session_start();
error_reporting(0);

if (isset($_POST['logout_button'])) {
    session_unset(); // clear session variables
    session_destroy(); // destroy the session
    header("Location: login.php"); // redirect to login page
    exit();
}
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sarawak Park Guide System</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<script>
document.addEventListener("DOMContentLoaded", function () {
    const backgrounds = [
        '../images/background1.jpg',
        '../images/background2.jpg',
        '../images/background3.jpeg',
        '../images/background4.jpg'
    ];
    let current = 0;
    const hero = document.getElementById('hero-section');

    hero.style.backgroundImage = `url('${backgrounds[0]}')`;

    setInterval(() => {
        current = (current + 1) % backgrounds.length;
        hero.style.backgroundImage = `url('${backgrounds[current]}')`;
    }, 3000);
});
</script>

<body>
    <header>
        <div class="container header-container">
        <a href="index.php" class="logo">
            <img src="../images/logo.png" alt="Smart Eco Guide Logo" style="height: 60px; vertical-align: middle; margin-right: 30px;">
            Smart Eco Guide System
        </a>

            <nav>
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="parks.php">Parks</a></li>
                    <li><a href="guides.php">Guides</a></li>
                    <li><a href="about.php">About</a></li>
                    <li><a href="survey.php">Feedback</a></li>
                    <li>
    <?php
    if (!empty($_SESSION['Id'])) {
        // Show logout button
        echo "
        <form method='post' style='display:inline;'>
            <input type='submit' name='logout_button' value='LOGOUT'>
        </form>";
    } else {
        // Show login link
        echo "<a href='login.php'><input type='button' value='LOGIN'></a>";
    }
    ?>
</li>

                </ul>
            </nav>
        </div>
    </header>