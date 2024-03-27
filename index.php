<?php
  include("conn.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <title>Creative Learning</title>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" type="text/css" href="style.css" />
  <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700,800,900&display=swap" rel="stylesheet" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet" />
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
  <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />
  
  <link rel="shortcut icon" href="images/meta.png" type="image/x-icon">
  <title>Creative Learning</title>
</head>

<body>
  <div class="header">
    <div class="navbar">
      <div class="logo">
        <a href="#"><img src="images/logo.png" /></a>
      </div>
      <div class="menu">
        <ul>
          <li> <a href="index.html">Home</a></li>
          <li> <a href="courses.html">Courses</a></li>
          <li><a href="about.html">About</a></li>
          <li><a href="contact.html">Contact</a></li>
        </ul>
      </div>
      <div class="login-btn"><a href="form.php">Sign Up</a></div>
    </div>
    <div class="banner">
      <div class="app-text">
        <br><br><br>

        <h1>Unleash Knowledge<br />Empower Success</h1>

        <h3> Empowering through transformative education. Innovative <br> solutions
          for individuals and organizations. Unlock your potential <br> with us.</h3>
        <div class="btn-group">
          <div class="signup-btn">Join For Free</div>
          <div class="play-btn">
            <div class="play-btn-inner">
              <a href="https://www.youtube.com/watch?v=Fc7gbzMpl0g" class="play-icon-link" style="color:#ffffff;" target="_blank"><i class="fa fa-play"></i></a>

            </div>
            <span>How it works</span>
          </div>
        </div>
      </div>
      <div class="app-picture">

        <img src="images/heroo.png" />
      </div>
    </div>

    <div class="about-services">
      <ul>
        <li>
          <img src="images/web.png" />
          <h1>WEB DEVELOPMENT</h1>
          <p>
            Empowering educators and captivating
            student.
          </p>
        </li>
        <li>
          <img src="images/ART.png" />
          <h1>GRAPHIC DESIGN</h1>
          <p>
            Unlock your potential with personalised
            learning experience.
          </p>
        </li>
        <li>
          <img src="images/MERKE.png" />
          <h1>DIGITAL MARKETING</h1>
          <p>
            guiding you towards success and helping you .
          </p>
        </li>
      </ul>
    </div>

    <div class="social-icons">
      <ul>
        <li>
          <a href="#"><i class="fa fa-facebook"></i></a>
        </li>
        <li>
          <a href="#"><i class="fa fa-twitter"></i></a>
        </li>
        <li>
          <a href="#"><i class="fa fa-linkedin"></i></a>
        </li>
        <li>
          <a href="#"><i class="fa fa-instagram"></i></a>
        </li>
      </ul>
    </div>


    <h2>Our Team</h2><br><br>

    <div class="main">


      <div class="profile-card">
        <div class="img">
          <img src="images/nabil hamdi.jpg">
        </div>
        <div class="caption">
          <h3>Nabil Hamdi</h3>
          <p>Designer</p>
          <div class="social-links">
            <a href="https://www.facebook.com/nbI.creations"><i class="fab fa-facebook" target="_blank"></i></a>
            <a href="https://www.instagram.com/nbl.creations/?hl=fr"><i class="fab fa-instagram" target="_blank"></i></a>
            <a href="https://www.behance.net/NBLCreations"><i class="fab fa-twitter" target="_blank"></i></a>
          </div>
        </div>
      </div>
      <div class="profile-card">
        <div class="img">
          <img src="images/wassim guessoum.jpg">
        </div>
        <div class="caption">
          <h3>Wassim Guessoum</h3>
          <p>Front End Developer</p>
          <div class="social-links">
            <a href="https://www.facebook.com/WassiimGsm/"><i class="fab fa-facebook" target="_blank"></i></a>
            <a href="https://www.instagram.com/wassiim.gsm/"><i class="fab fa-instagram" target="_blank"></i></a>
            <a href="https://twitter.com/WassiimGsm"><i class="fab fa-twitter" target="_blank"></i></a>
          </div>
        </div>
      </div>
      <div class="profile-card">
        <div class="img">
          <img src="images/abdou boutaleb.jpg">
        </div>
        <div class="caption">
          <h3>Abdou Boutaleb</h3>
          <p>Marketing</p>
          <div class="social-links">
            <a href="https://www.facebook.com/iabdouboutaleb/"><i class="fab fa-facebook" target="_blank"></i></a>
            <a href="https://www.instagram.com/iabdouboutaleb/"><i class="fab fa-instagram" target="_blank"> </i></a>
            <a href="https://twitter.com/iabdouboutaleb"><i class="fab fa-twitter" target="_blank"></i></a>
          </div>
        </div>
      </div>
    </div>
    <br>
    <section class="statistics">
      <div class="container">
        <div class="statistic">
          <div class="number">20+</div>
          <div class="label">Courses</div>
        </div>
        <div class="statistic">
          <div class="number">999+</div>
          <div class="label">Student</div>
        </div>
        <div class="statistic">
          <div class="number">69+</div>
          <div class="label">5 Star Rating</div>
        </div>
      </div>
    </section>

    <h2 class="trusted-by">Trusted By</h2>
    <br>
    <section class="trusted-by">
      <div class="container-by">

        <div class="logos">
          <img src="images/bmw.png">
          <img src="images/nettt.png">
          <img src="images/nasdaq.png">
          <img src="images/envent.png">
        </div>
      </div>
    </section>




  </div>


  <div class="gg">
    <div class="subscribe">
      <div class="subscribe__title">
        <h2> Subscripe to our NewsLetter</h2>
      </div>

      <h5 class="subscribe__copy">
        Stay informed and never miss an update! Subscribe to our newsletter now for the latest news, exclusive offers,
        and exciting updates delivered straight to your inbox
      </h5><br><br>
      <div class="form">
        <input type="email" class="form__email" placeholder="Enter your email address" />
        <button class="form__button">Send</button>
      </div>
    </div>
  </div>

</body>

<footer class="ALG">
  <img class="logooo" src="images/footer.png" alt=""><br>
  <div class="GSM">
    <section class="BALEK ">
      <h3> Business</h3>
      <a href="#">Teach on Creative Learning</a>
      <a href="#">Get the app</a>
      <a href="#">About us</a>
      <a href="#">Contact us</a>
    </section>

    <section class="BALEK ">
      <h3>Careers</h3>
      <a href="#">Blog</a>
      <a href="#">Help and Support
      </a>
      <a href="#">Affiliate</a>
      <a href="#">Investors</a>
    </section>
    <section class="BALEK">
      <h3>Terms</h3>
      <a href="#">Privacy policy</a>
      <a href="#">Cookies settings</a>
      <a href="#">Sitemap</a>
      <a href="#">Accessibility statment</a>
    </section>

    <br><br>
  </div>
  <div class="GSM">
    <br>
    <p>Copyright ©2023 All rights reserved ||CreativeLearning.com</p>
    </section>
  </div>
</footer>

</html>