<?php
require_once "session.php";
?>
<!DOCTYPE html>
<html>

<head>
  <title>The Inner Monologue</title>
  <link rel="stylesheet" href="create.css" />
  <link rel="stylesheet" href="contact.css" />
</head>

<body>
  <header>
    <nav class="header-nav">
      <div class="logo">
        <a href="#">The Inner Monologue</a>
      </div>
      <ul class="menu">
        <li><a href="home.php">Home</a></li>
        <li><a href="blog.php">Blog</a></li>
        <li><a href="about.php">About</a></li>
      </ul>
      <div class="create-account">
        <a href="admin.php"><i class="fas fa-tachometer-alt"></i><a>
            <!-- <a href="account.php"><i class="fas fa-user"></i></a> -->
      </div>
    </nav>
  </header>
  <!-- Body -->
  <form action="post.php" method="POST">
    <div class="container">
      <h1 class="topic">Create a Post</h1>

      <div class="box">
        <label for="topicInput">Topic:</label>
        <textarea id="topicInput" name="topic" placeholder="Enter your topic" maxlength="100"></textarea>
      </div>

      <div class="box">
        <label for="descriptionInput">Short Description:</label>
        <textarea id="descriptionInput" name="descri" placeholder="Enter a short description (20 words max)"
          maxlength="100"></textarea>
      </div>

      <div class="box">
        <label for="blogInput">Write your Blog:</label>
        <textarea id="blogInput" name="blog" placeholder="Write your blog (1500 words max)" maxlength="1500"></textarea>
        <div class="word-count" id="wordCount"></div>
      </div>

      <button id="postButton" class="button" onclick="window.location.href='post.php'">Post</button>
    </div>

  </form>
  <div class="boxx">
    <h1>Do you want to post your blog publicly?</h1>
    <button class="yes" id="yesButton">Yes</button>
    <button class="no" id="noButton">No</button>
    <div id="message" style="display: none;"></div>
  </div>
  <!-- Footer -->
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
<script>
  const yesButton = document.getElementById('yesButton');
  const noButton = document.getElementById('noButton');
  const messageDiv = document.getElementById('message');

  yesButton.addEventListener('click', function () {
    messageDiv.innerHTML = "Your blog has been saved. It will be reviewed by the admin and posted within 24 hours.";
    messageDiv.style.display = 'block';
  });

  noButton.addEventListener('click', function () {
    messageDiv.innerHTML = "Your blog is stored in our system.";
    messageDiv.style.display = 'block';
  });
</script>

</html>