<!DOCTYPE html>
<html>

<head>
  <title>Your Blog</title>
  <link rel="stylesheet" href="login.css" />

  <style>
    .error-message {
      color: red;
      margin-top: 5px;
      font-size: 14px;
    }
  </style>
</head>

<body>
  <header>
    <nav class="header-nav">
      <div class="logo">
        <a href="#">The Inner Monologue</a>
      </div>
      <ul class="menu">
        <!-- <li><a href="home.php">Home</a></li>
        <li><a href="blog.php">Blog</a></li>
        <li><a href="about.php">About</a></li>  -->
      </ul>
      <div class="create-account">
        <a href="account.php"><i class="fas fa-user"></i></a>
      </div>
    </nav>
  </header>
  <div class="container">
    <div class="login-box">
      <h1>Login</h1>
      <form id="loginForm" action="sign_in.php" method="POST">
        <div class="form-group">
          <label for="username">Username:</label>
          <input type="text" name="uname" id="username" placeholder="Enter your username" required />
        </div>
        <div class="form-group">
          <label for="password">Password:</label>
          <input type="password" name="passwd" id="password" placeholder="Enter your password" required />
        </div>
        <div class="form-group">
          <input type="submit" value="login" name="submit" />
        </div>
      </form>
      <p>
        Don't have an account? <a href="account.php">Create Account</a>
      </p>
    </div>
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
</body>
</html>