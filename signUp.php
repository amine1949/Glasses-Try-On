<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Include css Login -->
    <link rel="stylesheet" href="/Glasses-Try-On/css/style.css">
    <link rel="stylesheet" href="/Glasses-Try-On/css/signUp.css">
    <!-- Include css Login -->
    <!-- Inclode Icon -->
    <script src="https://kit.fontawesome.com/2f2d33a415.js" crossorigin="anonymous"></script>
    <link rel="shortcut icon" href="/Glasses-Try-On/image/glasses1.png" type="image/x-icon">
    <!-- Inclode Icon -->
    <title>GlassesVT Sign Up</title>
</head>
<body>
    <div class="container">
        <img src="/Glasses-Try-On/image/Logo.png" alt="Logo" class="logo">
        <form action="/home.php">
            <div class="Email">
                <input type="email" name="email" id="email" placeholder="Email" required>
                <i class="fa-solid fa-envelope fa-fade" style="color: #19a7ce; font-size: 25px;"></i>
            </div>
            <div class="User">
                <input type="text" name="Username" id="Username" placeholder="Username" >
                <i class="fa-regular fa-user fa-fade" style="color: #19a7ce; font-size: 25px;"></i>
            </div>
            <div class="pass">
                <input type="password" name="password" id="password" placeholder="Password">
                <i class="fa-solid fa-lock fa-beat-fade" style="color: #19a7ce; font-size: 25px;"></i><br>
            </div>
            <input type="checkbox" name="rememberMe" id="rememberMe">
            <span class="Rme">Remember me</span><br>
            <input type="submit" value="Login">
        </form>
        <div class="signUpHere">
            <span class="notHaveAnAccount">Already have an account ?</span>
            <a href="/signUp.php">Sign in Here</a>         
        </div>
    </div>
</body>
</html>