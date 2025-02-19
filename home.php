<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quiz</title>
    <link rel="stylesheet" href="home.css">
    <link rel="stylesheet" href="slider.css"> <!-- Add slider CSS -->
    <link rel="stylesheet" href="footer.css">
</head>
<body>

<!-- Background Image Slider -->
<div class="background-slider">
    <div class="slides">
        <div class="slide" style="background-image: url('back.jpg');"></div>
        <div class="slide" style="background-image: url('back3.jpg');"></div>
        <div class="slide" style="background-image: url('back2.jpg');"></div>
        <div class="slide" style="background-image: url('back1.jpg');"></div>
        <div class="slide" style="background-image: url('back4.jpg');"></div>
    </div>
</div>

<header class="navbar">
    <div class="logo">
        <img src="back.jpg" alt="">
    </div>

    <div class="search-bar">
        <input type="text" placeholder="Find a quiz">
        <button>🔍</button>
    </div>

    <nav>
        <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">Activity</a></li>
            <li><a href="#">contact</a></li>
        </ul>
    </nav>

    <div class="auth-buttons">
        <a href="login.php" class="login-btn">Log in</a>
        <a href="register.php" class="signup-btn">Sign up</a>
    </div>
</header>

<script src="slider.js"></script> <!-- Add JavaScript file -->
<footer class="small-footer">
    <div class="social-icons">
        <a href="https://www.facebook.com/HorizonGBSS" class="social-btn facebook-btn">
            <i class="fa-brands fa-facebook-f"></i>
        </a>
        <a href="https://www.horizongbs.edu.np/" class="social-btn google-btn">
            <i class="fa-brands fa-google"></i>
        </a>
    </div>
    <p>&copy; 2025 Quiz Platform</p>
</footer>

<!-- Font Awesome Icons -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">


</body>
</html>
