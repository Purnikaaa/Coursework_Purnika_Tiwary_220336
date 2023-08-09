<?php
require_once "session.php";
?>
<!DOCTYPE html>
<html>

<head>
  <title>The Inner Monologue</title>
  <link rel="stylesheet" href="about.css" />
  <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"> -->
  <!-- Your other stylesheets -->
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
  <!-- What We Offer -->
  <section class="reviews-section new-class-name">
    <h2>BLOG POST</h2>
    <div class="review-container">
      <div class="review-item">
        <div class="customer-image">
          <img src="images/i-img1.jpg" alt="Customer Image" />
        </div>
        <h3 class="customer-name">Content Creation</h3>
        <p class="customer-comment">Create and publish content.</p>
      </div>
      <div class="review-item">
        <div class="customer-image">
          <img src="images/i-img2.jpg" alt="Customer Image" />
        </div>
        <h3 class="customer-name">Audience Engagement</h3>
        <p class="customer-comment">
          interact with your readers through comments, encourage discussion
          and feedback
        </p>
      </div>
      <div class="review-item">
        <div class="customer-image">
          <img src="images/i-img3.jpg" alt="Customer Image" />
        </div>
        <h3 class="customer-name">Share Personal Stories</h3>
        <p class="customer-comment">
          The pastries at Sugar Plum Bakery are absolutely delicious. I can't
          get enough of their cakes and cookies. Highly recommended!
        </p>
      </div>
    </div>
  </section>
  <section class="introductionn">
    <div class="introductionn-image">
      <img src="images/a-img1.jpg" alt="About Us Image" />
    </div>
    <div class="introductionn-text">
      <h2>About Us</h2>
      <p>
        Welcome to The Inner Monologue! This blog is a platform where I share
        a combination of my coursework and personal writings. As a student, I
        delve into various subjects and assignments during my semesters, and I
        also enjoy expressing my thoughts through my own written pieces.
      </p>
      <p>
        Here, you'll find a collection of my coursework projects, assignments,
        and research, giving you insights into my academic journey and the
        topics I've explored. Additionally, I'll be sharing my own writings on
        various subjects that intrigue me.
      </p>
      <p>
        I believe that sharing my coursework and personal writings can offer a
        unique perspective and contribute to meaningful discussions. I aim to
        provide you with valuable insights, inspiration, and an opportunity to
        engage with the content.
      </p>
      <p>
        Thank you for joining me on this journey of learning and expression!
        Feel free to explore the blog posts and share your thoughts in the
        comments. I look forward to connecting with you.
      </p>
    </div>
  </section>

  <section class="introduction">
    <div class="container">
      <div class="section-container">
        <div class="section introduction">
          <h2>Welcome to sweet plum, where sweet dreams come to life!</h2>
          <p>
            It's a safe space to express yourself. You can be yourself and
            share your thoughts and feelings without fear of judgment or
            criticism. It's a great way to process your emotions. Writing can
            help you to understand your feelings and work through them in a
            healthy way. It's a way to connect with others. You can connect
            with other people who share your interests and experiences.
          </p>
        </div>
        <div class="section vision">
          <h2>Vision</h2>
          <p>
            Authentic storytelling. Inspiring connections. Engaging community.
            User-centric experience. Empowering individuals through shared
            experiences. Cultivating a platform for personal growth and
            self-expression. Igniting a passion for storytelling and fostering
            a sense of belonging.
          </p>
        </div>
      </div>
      <div class="section why-visit-us">
        <h2>Why Visit Us</h2>
        <ul>
          <li>
            The Inner Monologue is a safe space to share your thoughts and
            experiences.
          </li>
          <li>
            It's a great way to process your emotions and understand yourself
            better.
          </li>
          <li>
            You can connect with others who share your interests and
            experiences.
          </li>
          <li>
            Your blog posts can serve as a record of your life over time.
          </li>
        </ul>
      </div>
    </div>
  </section>
  <!-- Reviews -->
  <section class="reviews-section">
    <h2>Our Top Readers</h2>
    <div class="review-c">
      <div class="review-i">
        <div class="customer-image">
          <img src="images/c1.jpg" alt="Customer Image" />
        </div>
        <h3 class="customer-name">Nelly KC</h3>
        <p class="customer-comment">
          I've always wanted to connect with like-minded individuals and share
          my personal experiences. This blogging website made it possible. The
          engaging community and user-friendly interface make it a joy to be a
          part of. I've found inspiration and made meaningful connections that
          I'll cherish."
        </p>
      </div>
      <div class="review-i">
        <div class="customer-image">
          <img src="images/c2.jpg" alt="Customer Image" />
        </div>
        <h3 class="customer-name">Swera Chaudhary</h3>
        <p class="customer-comment">
          I can't express how much I love this personal blogging website as a
          reader. It's a treasure trove of diverse and captivating personal
          stories that resonate with me on a deep level. Navigating through
          the content is a breeze, and the interactive features, such as
          comments and social sharing, enhance the reading experience. It's my
          go-to platform for discovering authentic and inspiring narratives.
        </p>
      </div>
      <div class="review-i">
        <div class="customer-image">
          <img src="images/c3.jpg" alt="Customer Image" />
        </div>
        <h3 class="customer-name">Rista Rai</h3>
        <p class="customer-comment">
          As a writer, this personal blogging website has been a dream come
          true. The platform is user-friendly, allowing me to effortlessly
          publish and showcase my personal stories. The supportive community
          of readers and fellow writers has provided valuable feedback and
          encouragement, helping me grow as a writer. It's the perfect place
          to share my passion for storytelling.
        </p>
      </div>
    </div>
  </section>
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