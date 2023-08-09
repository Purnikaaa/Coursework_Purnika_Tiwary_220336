<?php
require_once "session.php";
?>
<!DOCTYPE html>
<html>

<head>
  <title>The Inner Monologue</title>
  <link rel="stylesheet" href="admin.css" />
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
        <a href="admin.php"><i class="fas fa-tachometer-alt"></i></a>
      </div>
    </nav>
  </header>
  <!-- Body -->

  <h1>Welcome,
    <?php echo $_SESSION['username']; ?>
  </h1>
  <div class="hd">
    <h1>Interesting Picks
    </h1>
  </div>
  <div class="section">
    <div class="box">
      <div class="topic">The Art of Mindful Living</div>
      <div class="description"> Exploring the benefits of mindfulness and practical tips for incorporating mindfulness
        into everyday life.</div>
      <a href="i1.txt"> <button class="read-button">Read All</button></a>
    </div>
    <div class="box">
      <div class="topic">The Power of Gratitude</div>
      <div class="description"> Discussing the positive impact of practicing gratitude on mental well-being and
        providing actionable ways to cultivate gratitude.</div>
      <a href="i2.txt"> <button class="read-button">Read All</button></a>
    </div>
    <div class="box">
      <div class="topic">The Science of Happiness</div>
      <div class="description">Delving into the psychology behind happiness and sharing evidence-based strategies to
        lead a happier life.</div>
      <a href="i3.txt"> <button class="read-button">Read All</button></a>
    </div>
  </div>
  <div class="section">
    <div class="box">
      <div class="topic">Embracing Failure as a Stepping Stone</div>
      <div class="description">Exploring how failures and setbacks can lead to personal growth, resilience, and success.
      </div>
      <a href="i4.txt"> <button class="read-button">Read All</button></a>
    </div>
    <div class="box">
      <div class="topic">Digital Detox: Unplugging for Mental Health</div>
      <div class="description"> Discussing the importance of taking breaks from technology and providing guidance on how
        to have a successful digital detox.</div>
      <a href="i5.txt"> <button class="read-button">Read All</button></a>
    </div>
    <div class="box">
      <div class="topic">Exploring Creativity: Nurturing Your Inner Artist</div>
      <div class="description">Unpacking the concept of creativity, its importance, and practical techniques for
        enhancing creative thinking.</div>
      <a href="i6.txt"> <button class="read-button">Read All</button></a>
    </div>
  </div>
  <div class="section">
    <div class="box">
      <div class="topic">The Art of Effective Communication</div>
      <div class="description">Sharing insights into effective communication skills, including active listening,
        nonverbal cues, and conflict resolution.</div>
      <a href="i7.txt"> <button class="read-button">Read All</button></a>
    </div>
    <div class="box">
      <div class="topic">Mind-Body Connection</div>
      <div class="description">The Influence of Exercise on Mental Health: Exploring the link between physical activity,
        mental well-being, and tips for maintaining a healthy balance.</div>
      <a href="i8.txt"> <button class="read-button">Read All</button></a>
    </div>
    <div class="box">
      <div class="topic">Overcoming Self-Doubt</div>
      <div class="description"> A Journey to Self-Confidence: Sharing personal experiences and practical advice for
        overcoming self-doubt and building self-confidence.</div>
      <a href="i9.txt"> <button class="read-button">Read All</button></a>
    </div>
  </div>
  <div class="buttons">
    <a href="blog.php"><button id="readBlogBtn">Read Blog</button></a>
    <a href="create.php"><button id=" writeBlogBtn">Write Blog</button></a>
    <a href="logout.php" id="logoutLink"><button id="writeBlogBtn">Log Out</button></a>
    <a>
  </div>
  </main>
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

</html>