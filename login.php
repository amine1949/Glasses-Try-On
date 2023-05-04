<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Include css Login -->
    <link rel="stylesheet" href="/Glasses-Try-On/css/style.css">
    <link rel="stylesheet" href="/Glasses-Try-On/css/login.css">
    <!-- Include css Login -->
    <!-- Inclode Icon -->
    <script src="https://kit.fontawesome.com/2f2d33a415.js" crossorigin="anonymous"></script>
    <link rel="shortcut icon" href="/Glasses-Try-On/image/glasses1.png" type="image/x-icon">
    <!-- Inclode Icon -->
    <title>GlassesVT Login</title>
</head>
<body>
    <div class="container">
        <img src="/Glasses-Try-On/image/Logo.png" alt="Logo" class="logo">
        <form action="/home.php">
            <div class="User">
                <input type="text" name="Username" id="Username" placeholder="Username" required>
                <i class="fa-regular fa-user fa-fade" style="color: #19a7ce; font-size: 25px;"></i>
            </div>
            <div class="pass">
                <input type="password" name="password" id="password" placeholder="Password" required>
                <i class="fa-solid fa-lock fa-beat-fade" style="color: #19a7ce; font-size: 25px;"></i><br>
            </div>
            <input type="checkbox" name="rememberMe" id="rememberMe">
            <span class="Rme">Remember me</span><br>
            <input type="submit" value="Login">
        </form>
        <div class="signUpHere">
            <span class="notHaveAnAccount">Not have an account ?</span>
            <a href="/Glasses-Try-On/signUp.php">Sign up Here</a>         
        </div>
    </div>
</body>
</html>
