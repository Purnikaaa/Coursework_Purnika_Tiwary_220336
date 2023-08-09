<?php
session_start();
session_unset();
session_destroy();
?>
<!DOCTYPE html>
<html>

<head>
  <title>Your Blog - My Account</title>
  <link rel="stylesheet" href="account.css" />
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

  <div class="container">
    <h1>Create Account</h1>
    <form action="sign_up.php" method="post">
      <div class="form-group">
        <label for="fullName">Full Name:</label>
        <input type="text" name="fname" id="fullName" placeholder="Enter your full name" required />
      </div>
      <div class="form-group">
        <label for="username">Username:</label>
        <input type="text" name="uname" id="username" placeholder="Choose a username" required />
      </div>
      <div class="form-group">
        <label for="country">Country:</label>
        <input type="text" name="country" id="country" placeholder="Enter your country" required />
      </div>
      <div class="form-group">
        <label for="phoneNumber">Phone Number:</label>
        <input type="tel" name="pnumber" id="phoneNumber" placeholder="Enter your phone number" required />
      </div>
      <div class="form-group">
        <label for="email">Email:</label>
        <input type="email" name="email" id="email" placeholder="Enter your email address" required />
      </div>
      <div class="form-group">
        <label for="password">Password:</label>
        <input type="password" name="passwd" id="password" placeholder="Enter your password" required />
      </div>
      <div class="form-group">
        <label for="confirmPassword">Confirm Password:</label>
        <input type="password" name="cpasswd" id="confirmPassword" placeholder="Confirm your password" required />
      </div>
      <div class="btn-field">
        <input type="submit" class="button" value="Create Account" name="submit">
    </form>
    <br /><br />
  </div>
  <p>Already have an account? <a href="login.php">Login</a></p>
  </div>
  <footer>
    <div class="footer-section">
      <h3>Links to Pages</h3>
      <ul>
        <li><a href="home.php">Home</a></li>
        <li><a href="blog.php">Blog</a></li>
        <li><a href="about.php">About Us</a></li>
        <li><a href="account.php">Create Account</a></li>
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
  <!-- <script src="account.js"></script> -->
</body>

</html>