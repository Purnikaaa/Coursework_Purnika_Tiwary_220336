<?php
require_once "session.php";
?>
<!DOCTYPE html>
<html>

<head>
    <title>The Inner Monologue</title>
    <link rel="stylesheet" href="home.css" />
</head>

<body>
    <header>
        <nav class="header-nav">
            <div class="logo">
                <a href="#">The Inner Monologue</a>
            </div>
            <ul class="menu">
                <!-- <li><a href="home.php">Home</a></li> -->
                <!-- <li><a href="blog.php">Blog</a></li>
        <li><a href="about.php">About</a></li> -->
            </ul>
            <div class="create-account">
                <!-- <a href="admin.php"><i class="fas fa-tachometer-alt"></i><a> -->
                <a href="account.php"><i class="fas fa-user"></i></a>
            </div>
        </nav>
    </header>
    <!--Body -->
    <div class="container">
        <div class="content">
            <h1 class="title">The Inner Monologue</h1>
            <p class="intro">
                Where words can heal.<br />Where stories are shared and connections
                are made.<br />A blog for the curious and the creative.
            </p>
            <a href="login.php" class="button">Create a Blog <span class="button-icon">+</span></a><br /><br />
            <a href="login.php" class="button">Read a Blog <span class="button-icon">&rarr;</span></a>
        </div>
        <div class="image">
            <img src="images/try1.jpg" alt="Image" />
        </div>
    </div>
    <footer>
        <div class="footer-section">
            <h3>Links to Pages</h3>
            <ul>
                <li><a href="home.php">Home</a></li>
                <li><a href="blog.php">Blog</a></li>
                <li><a href="about.php">About Us</a></li>
                <li><a href="login.php">Log-In</a></li>
            </ul>
        </div>
        <div class="footer-section">
            <h3>Our Policy</h3>
            <ul>
                <li><a href="#">Privacy Policy</a></li>
                <li><a href="#">Terms and Conditions</a></li>
                <li><a href="#">Refund Policy</a></li>
            </ul>
        </div>
        <div class="footer-section">
            <h3>Contact Us</h3>
            <ul>
                <li><i class="fas fa-map-marker-alt"></i> The Inner Monologue</li>
                <li><i class="fas fa-phone"></i> +977 9861900240</li>
                <li><i class="fas fa-envelope"></i> tiwaripurnika@gmail.com.com</li>
            </ul>
        </div>
        <div class="footer-section">
            <h3>Socials</h3>
            <ul class="social-icons">
                <li>
                    <a href="#"><i class="fab fa-facebook"></i></a>
                </li>
                <li>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                </li>
                <li>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                </li>
            </ul>
        </div>
    </footer>
</body>
</html>