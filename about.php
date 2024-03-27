<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet" />
    <link rel="stylesheet" href="about.css">
    <link rel="shortcut icon" href="images/meta.png" type="image/x-icon">

    <title>About Us</title>
</head>

<body>

    <div class="header">
        <div class="navbar">
            <div class="logo">
                <a href="index.html"><img src="images/logo.png" /></a>
            </div>
            <div class="menu">
                <ul>
                    <li> <a href="index.html">Home</a></li>
                    <li> <a href="courses.html">Courses</a></li>
                    <li><a href="about.html">About</a></li>
                    <li><a href="contact.html">Contact</a></li>
                </ul>
            </div>
            <div class="login-btn">Sign Up</div>
        </div> <br><br>

        <section class="about-us">
            <div class="about">
                <img src="images/about.png" class="pic">
                <div class="text">
                    <h4>DISCOVER</h4>
                    <h2>About <span> Us </span> </h2>
                    <h5>Empowering Learning, One Click at a Time</h5>

                    <p>we believe that education should be accessible to everyone, regardless of their location or
                        circumstances. Our journey began in 2024 with a simple yet powerful vision: to revolutionize the
                        way people learn by harnessing the potential of technology.</p>
                    <br>

                    <p>Driven by our passion for education and a deep understanding of the evolving learning landscape,
                        we</p>
                    <p class="hidden">embarked on a mission to create a platform that breaks down barriers and empowers
                        learners worldwide. We have since grown into a leading <br> e-learning platform.</p><br>
                    <button onclick="toggleReadMore()">Read More</button><br>

                    <script>
                        function toggleReadMore() {
                            var hiddenParagraph = document.querySelector('.hidden');
                            var readMoreButton = document.querySelector('button');

                            if (hiddenParagraph.style.display === 'none') {
                                hiddenParagraph.style.display = 'block';
                                readMoreButton.textContent = 'Read Less';
                            } else {
                                hiddenParagraph.style.display = 'none';
                                readMoreButton.textContent = 'Read More';
                            }
                        }
                    </script>

                </div>
            </div>
        </section>

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