<?php

    // ----------------------link project with db--------------------------------- 
    @include 'connexion.php';
    // ----------------------link project with db--------------------------------- 

    
    if(isset($_POST['submit'])){
        
        $username = mysqli_real_escape_string($connection,$_POST['Username']);
        $password = md5($_POST['password']);
        

        $select = " SELECT * FROM `users` WHERE username = '$username' && password = '$password'";

        $result = mysqli_query($connection, $select);

        if(mysqli_num_rows($result) > 0){
            $row = mysqli_fetch_array($result);

            if ($row['user_type'] == 'admin') {
                $_SESSION['admin_name'] = $row['admin'];
                header('location:dashboard_Admin.php');
            }elseif($row['user_type'] == 'user'){
                $_SESSION['user_name'] = $row['user'];
                header('location:home.php');
            }
        }else{
            $error[] = 'incorrect email or password';
        };
    };

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Include css Login -->
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/css/login.css">
    <!-- Include css Login -->
    <!-- Inclode Icon -->
    <script src="https://kit.fontawesome.com/2f2d33a415.js" crossorigin="anonymous"></script>
    <link rel="shortcut icon" href="/image/glasses1.png" type="image/x-icon">
    <!-- Inclode Icon -->
    <title>GlassesVT Login</title>
</head>
<body>
    <div class="container">
        <img src="/image/logoLogin.png" alt="Logo" class="logo">
        <form action="" method="post">
            <?php 
                if (isset($error)) {
                    foreach ($error as $error) {
                        echo "<script> alert('$error'); </script>";
                    };
                };
            ?>
            <div class="user"> 
                <input type="text" name="Username" id="Username" placeholder="Username" required>
                <i class="fa-regular fa-user fa-fade" style="color: #19a7ce; font-size: 25px;"></i>
            </div>
            <div class="pass">
                <input type="password" name="password" id="password" placeholder="Password" required>
                <i class="fa-solid fa-lock fa-beat-fade" style="color: #19a7ce; font-size: 25px;"></i><br>
            </div>
            <input type="checkbox" name="rememberMe" id="rememberMe">
            <span class="Rme">Remember me</span><br>
            <input type="submit" name="submit" value="Login">
        </form>
        <div class="signUpHere">
            <span class="notHaveAnAccount">Not have an account ?</span>
            <a href="/signUp.php">Sign up Here</a>         
        </div>
        <div class="socialMediaSignin">
            <p>Sign up with social account</p>
            <i class="fa-brands fa-google-plus-g" style="color: #d60000; font-size: 40px"></i>
            <i class="fa-brands fa-facebook" style="color: #0d50c5; font-size: 35px" ></i>
        </div>
    </div>
</body>
</html>