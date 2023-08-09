<?php
require_once "session.php";
?>


<!DOCTYPE html>
<html>

<head>
  <title>The Inner Monologue</title>
  <link rel="stylesheet" href="blog.css" />
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
  <!-- Recently Added -->


  <!-- You may also like -->
  <section class="most-picked-section">
    <h2>You may Also like</h2>
    <div class="blog-post">
      <h3>I Love Animals, But I'm an Animal Person from a Distance</h3>
      <p class="short-description">
        I love animals. I think they're amazing creatures, and I love learning
        about them. But I'm also an animal person from a distance. I don't
        have any pets, and I'm not really comfortable being around animals in
        person....
      </p>
      <?php if (isset($_SESSION['user_id'])) { ?>
        <a href="#post1" class="read-more-button" onclick="toggleDescription(this)">Continue Reading</a>
      <?php } else { ?>
        <a href="login.php" class="read-more-button">Continue Reading</a>
      <?php } ?>
      <!-- <a href="#" class="read-more-button" onclick="toggleDescription(this)">Continue Reading</a>-->
      <div class="full-description">
        <p name="post1">
          I love animals. I think they're amazing creatures, and I love
          learning about them. But I'm also an animal person from a distance.
          I don't have any pets, and I'm not really comfortable being around
          animals in person. I know that this might seem strange to some
          people. After all, animals are often seen as being cuddly and
          friendly. But for me, there's something about being up close and
          personal with an animal that just makes me feel uneasy. I'm not sure
          why I feel this way. Maybe it's because I'm afraid of getting bitten
          or scratched. Or maybe it's because I'm just not used to being
          around animals. Whatever the reason, I've always been more
          comfortable watching animals from afar.<br />There are a few reasons
          why I like to watch animals from afar. First, it allows me to learn
          about them without having to get too close. I can watch them in
          their natural habitats, and I can see how they interact with each
          other. Second, watching animals from afar is a great way to relax
          and de-stress. There's something about watching the animals go about
          their daily lives that's just very calming. Third, watching animals
          from afar allows me to connect with nature. I love seeing animals in
          their natural habitats, and it reminds me of the beauty of the
          natural world.<br />So, there you have it. I'm an animal person from
          a distance. I love animals, but I'm not really comfortable being
          around them in person. But that doesn't mean that I can't enjoy
          watching them from afar. In fact, I find it to be a very enjoyable
          and relaxing experience. <br />
          If you're an animal person like me, I encourage you to find ways to
          enjoy animals from afar. There are many ways to do this, such as
          watching nature documentaries, visiting zoos, or even just taking a
          walk in the park. So get out there and enjoy the animals!
        </p>

      </div>
    </div>
    <div class="blog-post">
      <h3>How to Dress with Thick Thighs and Still Love Baggy Pants</h3>
      <p class="short-description">
        Do you love wearing baggy pants, but you're worried that they'll make
        your thighs look fat? You're not alone. Many women with thick thighs
        feel self-conscious about their legs, and they avoid wearing
        tight-fitting clothes....
      </p>
      <?php if (isset($_SESSION['user_id'])) { ?>
        <a href="#post2" class="read-more-button" onclick="toggleDescription(this)">Continue Reading</a>
      <?php } else { ?>
        <a href="login.php" class="read-more-button">Continue Reading</a>
      <?php } ?>
      <!-- <a href="#" class="read-more-button" onclick="toggleDescription(this)">Continue Reading</a>-->
      <div class="full-description">
        <p name="post2">
          But the truth is, there are ways to wear baggy pants and still look
          stylish and confident. With a few simple tips, you can flatter your
          figure and feel great about your legs.<br />
          Here are a few tips on how to dress with thick thighs and still love
          baggy pants: Choose the right fit. Baggy pants come in all different
          styles, so it's important to choose a fit that flatters your body.
          Avoid pants that are too loose, as they will only make your thighs
          look bigger. Instead, opt for pants that are slightly fitted through
          the thigh and then flare out at the bottom. Pay attention to the
          fabric. Some fabrics are more flattering to thick thighs than
          others. Avoid fabrics that are too clingy or too heavy. Instead, opt
          for fabrics that are lightweight and flowy. Add some visual
          interest. A great way to distract from your thighs is to add some
          visual interest to your outfit. This could mean wearing a patterned
          top, a scarf, or a statement necklace. Emphasize your waist. A great
          way to create the illusion of a slimmer waist is to wear a belt or a
          peplum top. This will draw attention away from your thighs and focus
          on your waist. Accessorize wisely. The right accessories can help
          you to look and feel your best. Choose accessories that flatter your
          figure and make you feel confident.<br />With a few simple tips, you
          can wear baggy pants and still look stylish and confident. So don't
          be afraid to embrace your curves and rock those baggy pants!
          Additional tips for dressing with thick thighs: Choose dark colors.
          Dark colors are slimming, so they're a great choice for women with
          thick thighs. Avoid horizontal stripes. Horizontal stripes can make
          your thighs look wider, so it's best to avoid them. Experiment with
          different lengths. Different lengths of pants can flatter different
          body types. Try experimenting with different lengths to see what
          works best for you. Don't be afraid to show some skin. A little bit
          of skin can be a great way to distract from your thighs. Try wearing
          a pair of shorts or a skirt that shows some leg. The most important
          thing is to be confident in your own skin. If you love wearing baggy
          pants, then wear them! Don't let your thighs hold you back from
          wearing the clothes that you love.
        </p>
      </div>
    </div>
    <div class="blog-post">
      <h3>How Teenagers Want to Be Millionaires</h3>
      <p class="short-description">
        In today's world, it seems like everyone wants to be a millionaire.
        This is especially true for teenagers, who are constantly bombarded
        with images of wealth and success. There are a number of reasons why
        teenagers might want to be millionaires young
      </p>
      <?php if (isset($_SESSION['user_id'])) { ?>
        <a href="#post3" class="read-more-button" onclick="toggleDescription(this)">Continue Reading</a>
      <?php } else { ?>
        <a href="login.php" class="read-more-button">Continue Reading</a>
      <?php } ?>
      <!-- <a href="#" class="read-more-button" onclick="toggleDescription(this)">Continue Reading</a> -->
      <div class="full-description">
        <p name="post3">
          1. They want to be able to buy anything they want. Teenagers are
          often very materialistic, and they see money as a way to buy the
          things they want. Whether it's the latest fashions, the newest
          gadgets, or simply the freedom to do whatever they want, money can
          seem like the answer to all of their problems.<br />

          2. They want to be financially secure. Teenagers are also starting
          to think about their future, and they want to make sure that they
          will be financially secure when they grow up. They see millionaires
          as people who have everything they could ever want, and they want to
          be able to achieve that same level of success.<br />

          3. They want to be role models. Teenagers are often looking for role
          models, and they see millionaires as people who have achieved great
          things. They want to be able to look up to someone who has achieved
          financial success, and they think that being a millionaire would
          give them that kind of status.<br />Of course, there are also some
          drawbacks to wanting to be a millionaire young. For one thing, it
          can be very difficult to achieve financial success at a young age.
          It takes a lot of hard work, dedication, and luck. Additionally,
          there is a lot of pressure that comes with being a millionaire, and
          it can be difficult to live up to the expectations of others.

          <br />However, if you are a teenager who dreams of being a
          millionaire, there are a few things you can do to increase your
          chances of success. First, you need to set realistic goals. Don't
          expect to become a millionaire overnight. Instead, focus on setting
          small, achievable goals that will help you reach your ultimate goal.
          Second, you need to be willing to work hard. There is no such thing
          as a get-rich-quick scheme. If you want to be a millionaire, you
          need to be willing to put in the time and effort. Finally, you need
          to be patient. It takes time to build wealth, so don't get
          discouraged if you don't see results immediately.

          <br />If you are a teenager who wants to be a millionaire young,
          there is no reason why you can't achieve your dream. Just remember
          to set realistic goals, work hard, and be patient. With a little bit
          of effort, you can achieve anything you set your mind to.
        </p>
      </div>
    </div>
    <div class="blog-post">
      <h3>How Your Friends Circle Influences Your Career</h3>
      <p class="short-description">
        Your friends circle can have a big impact on your career. The people
        you spend time with can influence your values, your goals, and your
        behavior. They can also provide you with opportunities, support, and
        guidance.
      </p>
      <?php if (isset($_SESSION['user_id'])) { ?>
        <a href="#post4" class="read-more-button" onclick="toggleDescription(this)">Continue Reading</a>
      <?php } else { ?>
        <a href="login.php" class="read-more-button">Continue Reading</a>
      <?php } ?>

      <div class="full-description">
        <p name="post4">
          Here are some of the ways your friends circle can influence your
          career:<br />
          1. They can influence your values. The people you spend time with
          can shape your beliefs about what is important in life. If your
          friends are all ambitious and driven, you are more likely to be
          ambitious and driven yourself.<br />
          2. They can influence your goals. Your friends can also influence
          your career goals. If your friends are all talking about starting
          their own businesses, you are more likely to consider starting your
          own business yourself.<br />
          3. They can provide you with opportunities. Your friends can
          introduce you to new people, give you advice, and help you find job
          openings.<br />
          4. They can provide you with support. Your friends can be there for
          you when you are feeling down or when you are facing challenges in
          your career. They can offer you encouragement and help you stay
          motivated.<br />
          5. They can provide you with guidance. Your friends can share their
          own experiences and insights with you. They can help you make
          decisions about your career and give you advice on how to
          succeed.<br />
          Of course, not all friends are created equal. Some friends can be a
          positive influence on your career, while others can be a negative
          influence. It is important to choose your friends wisely and to
          surround yourself with people who will support your goals and help
          you achieve your full potential. Here are some tips for choosing
          friends who will be a positive influence on your career:<br />

          1. Find friends who share your values. This will help you stay
          motivated and focused on your goals.<br />
          2. Find friends who are ambitious and driven. These friends will
          challenge you to be the best version of yourself.<br />
          3. Find friends who are supportive and encouraging. These friends
          will be there for you when you need them.<br />
          4. Find friends who are knowledgeable and experienced. These friends
          can share their insights and advice with you.<br />
        </p>
      </div>
    </div>
    <div class="blog-post">
      <h3>How to Start Investing Young</h3>
      <p class="short-description">
        Investing young is one of the best things you can do for your
        financial future. The earlier you start, the more time your money has
        to grow. Even if you can only invest a small amount each month, it
        will add up over time.
      </p>
      <?php if (isset($_SESSION['user_id'])) { ?>
        <a href="#post5" class="read-more-button" onclick="toggleDescription(this)">Continue Reading</a>
      <?php } else { ?>
        <a href="login.php" class="read-more-button">Continue Reading</a>
      <?php } ?>

      <div class="full-description">
        <p name="poast5">
          Here are some tips on how to start investing young:<br />

          1. Set up a budget and save up some money. Before you can start
          investing, you need to have some money saved up. Start by creating a
          budget and tracking your spending. Once you know how much money you
          have coming in and going out, you can start setting aside some money
          each month for investing.<br />
          2. Do your research. Before you start investing, it's important to
          do your research and understand the different investment options
          available. There are many different types of investments, and each
          one has its own risks and rewards. It's important to choose
          investments that are right for your age, risk tolerance, and
          financial goals.<br />
          3. Start small. You don't need to invest a lot of money to get
          started. Even if you can only invest $50 or $100 each month, it's a
          good start. As you learn more about investing and your financial
          situation changes, you can adjust your investment strategy
          accordingly.<br />
          4. Be patient. Investing is a long-term game. Don't expect to get
          rich quick. It takes time for your investments to grow. Be patient
          and stay focused on your financial goals.<br />
          Investing young can help you achieve your financial goals faster. By
          following these tips, you can get started on the right foot and
          start building your wealth for the future. Here are some additional
          tips for young investors:<br />

          1. Start with index funds. Index funds are a great way to invest in
          the stock market without having to pick individual stocks. They
          track a specific market index, such as the S&P 500, and they tend to
          be very low-cost.<br />
          2. Invest for the long term. The stock market is volatile in the
          short term, but it has historically trended upwards over the long
          term. If you invest for the long term, you'll be more likely to ride
          out the ups and downs of the market and achieve your financial
          goals.<br />
          3. Rebalance your portfolio regularly. As your investments grow,
          you'll need to rebalance your portfolio to make sure it still aligns
          with your risk tolerance and financial goals. This means selling
          some of your winners and buying more of your losers.<br />
          4. Don't panic sell. When the stock market takes a downturn, it's
          tempting to sell your investments and cut your losses. However, this
          is usually the worst thing you can do. If you sell your investments
          when the market is down, you'll lock in your losses. Instead, stay
          calm and ride out the storm. The market will eventually recover, and
          you'll be glad you didn't sell.<br />
          Investing young is a great way to start building your wealth for the
          future. By following these tips, you can get started on the right
          foot and achieve your financial goals.<br />
        </p>
      </div>
    </div>
    <div class="blog-post">
      <h3>
        Why Students Use ChatGPT and Other AI for Assignments and Coursework
      </h3>
      <p class="short-description">
        ChatGPT and other AI-powered tools are becoming increasingly popular
        among students for completing assignments and coursework. These tools
        offer a number of advantages over traditional methods, such as Google,
        including the ability to generate text, translate languages, and
        answer questions in a more natural and engaging way.
      </p>
      <?php if (isset($_SESSION['user_id'])) { ?>
        <a href="#post6" class="read-more-button" onclick="toggleDescription(this)">Continue Reading</a>
      <?php } else { ?>
        <a href="login.php" class="read-more-button">Continue Reading</a>
      <?php } ?>

      <div class="full-description">
        <p name="post6">
          In recent years, there has been a growing trend of students using
          AI-powered tools to complete their assignments and coursework. These
          tools, such as ChatGPT and others, offer a number of advantages over
          traditional methods, such as Google, including:<br />

          1. The ability to generate text: AI-powered tools can generate text
          that is more natural and engaging than text that is written by
          humans. This can be helpful for students who are struggling to write
          their own essays or other assignments.<br />
          2. The ability to translate languages: AI-powered tools can
          translate languages quickly and accurately. This can be helpful for
          students who are taking classes in a foreign language or who need to
          translate research papers or other documents.<br />
          3. The ability to answer questions: AI-powered tools can answer
          questions in a more natural and engaging way than traditional search
          engines. This can be helpful for students who are stuck on a problem
          or who need to find information quickly.<br />
          4. Of course, there are also some potential drawbacks to using
          AI-powered tools for assignments and coursework. For example, these
          tools can be expensive, and they may not always be accurate.
          Additionally, some students may find that using these tools takes
          away from the learning process.<br />

          Overall, however, the advantages of using AI-powered tools for
          assignments and coursework outweigh the drawbacks. These tools can
          help students to write better essays, translate languages more
          accurately, and answer questions more quickly. As a result, they are
          becoming increasingly popular among students.<br />

          Here are some additional tips for students who are considering using
          AI-powered tools for their assignments and coursework:<br />

          1. Do your research: Before you use any AI-powered tool, be sure to
          do your research and make sure that it is a reputable tool. There
          are a number of scams out there, so it is important to be
          careful.<br />
          2. Use the tool wisely: AI-powered tools are not a substitute for
          learning. Be sure to use them as a tool to help you learn, not as a
          way to avoid learning.<br />
          3. Be aware of the limitations: AI-powered tools are not perfect.
          They can make mistakes, and they may not always be able to answer
          your questions correctly. Be aware of the limitations of these
          tools, and be prepared to do your own research if necessary.<br />
          If you are considering using AI-powered tools for your assignments
          and coursework, be sure to follow these tips. By doing so, you can
          ensure that you are using these tools in a safe and effective
          way.<br />
        </p>
      </div>
    </div>
    <!-- Repeat the above blog-post div for other most picked blog posts -->
  </section>
  <!-- Most Picked-->
  <section class="you-may-also-like">
    <h2>Most Picked</h2>
    <div class="grid-container">
      <div class="grid-item">
        <a href="1.txt">
          <img src="images/img1.jpg" alt="Image 1" />
          <div class="topic">Where to Travel when you are broke</div>
        </a>
      </div>
      <div class="grid-item">
        <a href="2.txt">
          <img src="images/img2.jpg" alt="Image 2" />
          <div class="topic">Skin care Vs Makeup</div>
        </a>
      </div>
      <div class="grid-item">
        <a href="3.txt">
          <img src="images/img3.jpg" alt="Image 3" />
          <div class="topic">So many ideas</div>
        </a>
      </div>
      <div class="grid-item">
        <a href="4.txt">
          <img src="images/img4.jpg" alt="Image 4" />
          <div class="topic">Mental, sprirtual and Physical weel being</div>
        </a>
      </div>
      <div class="grid-item">
        <a href="5.txt">
          <img src="images/img5.jpg" alt="Image 4" />
          <div class="topic">Proper Skin care guide</div>
        </a>
      </div>
      <div class="grid-item">
        <a href="6.txt">
          <img src="images/img6.jpg" alt="Image 4" />
          <div class="topic">Friends to Stranger</div>
        </a>
      </div>
      <div class="grid-item">
        <a href="7.txt">
          <img src="images/img7.jpg" alt="Image 4" />
          <div class="topic">Does music define a person?</div>
        </a>
      </div>
      <div class="grid-item">
        <a href="8.txt">
          <img src="images/img8.jpg" alt="Image 4" />
          <div class="topic">My scrambled Brain</div>
        </a>
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
  <script>
    function toggleDescription(button) {
      const fullDescription = button.nextElementSibling;
      fullDescription.style.display = fullDescription.style.display === "block" ? "none" : "block";
    }
  </script>
</body>
</html>