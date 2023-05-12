<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Include css Login -->
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="./css/product.css">
    <!-- Include css Login -->
    <!-- Inclode Icon -->
    <script src="https://kit.fontawesome.com/2f2d33a415.js" crossorigin="anonymous"></script>
    <link rel="shortcut icon" href=".//image//shopping.png" type="image/x-icon">
    <!-- Inclode Icon -->


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">



    <title>Product</title>
</head>

<body>
    <!-- header section start -->
        <?php
            @include './header_footer/header.php';
        ?>
    <!-- header section end -->

    <!-- product section start   -->

        <section class="product">
            <div class="box-container">

                <div class="box-1">
                    <!-- -----------------------3 images---------------------------   -->
                    <div class="imagesP">
                        <div class="image">
                            <img class="img-fluid" src="./image/Article/short.png" alt="#">
                        </div>
                        <div class="image">
                            <img class="img-fluid" src="./image/Article/short2.png" alt="#">
                        </div>
                        <div class="image">
                            <img class="img-fluid" src="./image/Article/Short3.jpeg" alt="#">
                        </div>
                    </div>
                    <!-- -----------------------3 images---------------------------   -->


                    <!-- -----------------------------------image pricipale-------------------------------- -->
                    <div class="imageP">
                        
                            <img class="img-fluid" src="./image/Article/short.png" alt="#">
                        
                    </div>
                    <!-- -----------------------------------image pricipale-------------------------------- -->


                    <!-- -------------------------------------product informations----------------------------- -->
                    <div class="informations">
                        <div class="titleP">
                            <p>MONCLER Logo-Patch Swimming Shorts Red <br> <span>MONCLER</span></p>
                        </div>
                        <div class="prC">
                            <span class="price">250.00 MAD</span>
                            <span class="categorie">Men's</span>
                        </div>
                        <div class="sizes">
                            <div class="title">
                                <span class="sizeTitle">Size :</span>
                            </div>
                            <div class="sizeBox">
                                <div class="size">S</div>
                                <div class="size">M</div>
                                <div class="size">L</div>
                                <div class="size">XL</div>
                                <div class="size">XXL</div>
                                <div class="size">XXXL</div>
                            </div>
                        </div>
                        <div class="btnAddToCart">
                            <button class="btn">Add To Cart <i class="fa-solid fa-cart-plus"></i></button>
                        </div>
                        <div class="wish-btnTryOn">
                            <div class="wishList">
                                <i class="fa-regular fa-heart"></i>
                                <span class="textWishList"> Add to Wishlist</span>
                            </div>
                            <div class="TryOn">
                                <button>Try On new <i class="fa-solid fa-glasses"></i> </button>
                            </div>
                        </div>
                    </div>
                    <!-- -------------------------------------product informations----------------------------- -->
                </div>


                <div class="box-2">
                    <div class="descriptionTitle">
                        <span>Description :</span>
                    </div>
                    <div class="description">
                        <p>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                            Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure
                            dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                        </p>
                    </div>
                </div>
                <div class="box-3">
                    <div class="box quickDelivey">
                        <div class="logo">
                            <i class="fa-solid fa-stopwatch-20"></i>
                        </div>
                        <div class="body">
                            <h3>Quick Delivy</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur</p>
                        </div>
                    </div>
                    <div class="box LiveOrderTracking">
                        <div class="logo">
                            <i class="fa-solid fa-map-location-dot"></i>
                        </div>
                        <div class="body">
                            <h3>Live Order Tracking</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur</p>
                        </div>
                    </div>
                    <div class="box freeShipping">
                        <div class="logo">
                            <i class="fa-solid fa-truck-fast"></i>
                        </div>
                        <div class="body">
                            <h3>Free Shipping</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>



        <h1>Product</h1>
        <a href="/logout.php">LogOut</a>





    <!-- product section end   -->


    <!-- footer section start   -->
        <?php
            @include './header_footer/footer.php';
        ?>
    <!-- footer section end   -->



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

</body>

</html>