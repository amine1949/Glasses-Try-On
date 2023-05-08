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
    <!-- include js file  -->

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css"/>

    <!-- include js file  -->
    <title>Home</title>
</head>

<body>

    <!-- header section start -->
        <?php
            @include './header_footer/header.php';
        ?>
    <!-- header section end -->
        <section class="home">
            <div class="swiper home-slider">

                <div class="swiper-wrapper">

                    <div class="swiper-slide  slide" style="background:url(./image/slide1.png) no-repeat">
                        <div class="content">
                            <img src="./image/GlassesTryOn.png" alt="GlassesTryOn">
                            <p>Finding the perfect pair of glasses is easy with Virtual Try-On.
                                With amazing realism, you can try on glasses from the comfort of your couch.
                                Our virtual glasses tool lets you try on as many pairs as you like!
                            </p>
                            <a href="shop.php" class="btn">Try now</a>
                        </div>
                    </div>

                    <div class="swiper-slide slide" style="background:url(./image/footerBackground.png) no-repeat">
                        <div class="content">
                            <img src="./image/GlassesTryOn.png" alt="GlassesTryOn">
                            <p>Finding the perfect pair of glasses is easy with Virtual Try-On.
                                With amazing realism, you can try on glasses from the comfort of your couch.
                                Our virtual glasses tool lets you try on as many pairs as you like!
                            </p>
                            <a href="shop.php" class="btn">Try now</a>
                        </div>
                    </div>

                    <div class="swiper-slide slide" style="background:url(./image/ice.jpg) no-repeat">
                        <div class="content">
                            <img src="./image/GlassesTryOn.png" alt="GlassesTryOn">
                            <p>Finding the perfect pair of glasses is easy with Virtual Try-On.
                                With amazing realism, you can try on glasses from the comfort of your couch.
                                Our virtual glasses tool lets you try on as many pairs as you like!
                            </p>
                            <a href="shop.php" class="btn">Try now</a>
                        </div>
                    </div>
                    
                    
                </div>

                <!-- <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div> -->
            </div>
            
        </section>
    <!-- home section start   -->




        <h1>Home</h1>
        <a href="/logout.php">LogOut</a>





    <!-- home section end   -->

    <!-- footer section start   -->
        <?php
            @include './header_footer/footer.php';
        ?>
    <!-- footer section end   -->

    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>

    <script src="./javascript/slide.js"></script>
</body>

</html>