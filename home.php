<?php 
        // @include 'connexion.php';

        // session_start();
    
        // if (!isset($_SESSION['user_name'])) {
        //     header('location:login.php');
        // }
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Include css Login -->
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/css/home.css">
    <!-- Include css Login -->
    <!-- Inclode Icon -->
    <script src="https://kit.fontawesome.com/2f2d33a415.js" crossorigin="anonymous"></script>
    <link rel="shortcut icon" href="/image/glasses1.png" type="image/x-icon">
    <!-- Inclode Icon -->
    <title>Home</title>
</head>

<body>

    <!-- header section start -->
        <section class="header">
            <a href="home.php" class="logo">Eshop.</a>

            <nav class="navBar">
            <a href="home.php">home</a>
            <a href="about.php">shop</a>
            <a href="package.php">categories</a>
            <a href="book.php">Contact</a>
        </nav>
        </section>
    <!-- header section end -->







    <h1>Welcome</h1>
    <a href="/logout.php">LogOut</a>
</body>

</html>