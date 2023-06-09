<?php
session_start();
if (!isset($_SESSION["user"])) {
   header("Location: login.php");

}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Fitlife - Work Hard To Get Better Life</title>

  <!-- 
    - favicon
  -->
  <link rel="shortcut icon" href="./favicon.svg" type="image/svg+xml">

  <!-- 
    - custom css link
  -->
   <link rel="stylesheet" href="./assets/css/style.css"> 
  
  <!-- 
    - google font link
  -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Catamaran:wght@600;700;800;900&family=Rubik:wght@400;500;800&display=swap"
    rel="stylesheet">

  <!-- 
    - preload images
  -->
  <link rel="preload" as="image" href="./assets/images/hero-banner.png">
  <link rel="preload" as="image" href="./assets/images/hero-circle-one.png">
  <link rel="preload" as="image" href="./assets/images/hero-circle-two.png">
  <link rel="preload" as="image" href="./assets/images/heart-rate.svg">
  <link rel="preload" as="image" href="./assets/images/calories.svg">

</head>

<body id="top">

  <!-- 
    - #HEADER
  -->
  <header class="header" data-header>
  
    <div class="container">

      <a href="#" class="logo">
        <ion-icon name="barbell-sharp" aria-hidden="true"></ion-icon>

        <span class="span">The Boyz</span>
      </a>

      <nav class="navbar" data-navbar>

        <button class="nav-close-btn" aria-label="close menu" data-nav-toggler>
          <ion-icon name="close-sharp" aria-hidden="true"></ion-icon>
        </button>

        <ul class="navbar-list">

          <li>
            <a href="index.php" class="navbar-link active" data-nav-link>Home</a>

          </li>
          <li>
            <a href="About Us.php" class="navbar-link" data-nav-link>About Us</a>
          </li>

          <li>
            <a href="Classes.php" class="navbar-link" data-nav-link>Classes</a>
          </li>

          <li>
            <a href="Nutrition.php" class="navbar-link" data-nav-link>Nutrition</a>
          </li>

          <li>
            <a href="Contact Us.php" class="navbar-link" data-nav-link>Contact Us</a>
          </li>

        </ul>

      </nav>
      <!-- <a href="logout.php" class="btn btn-warning">Logout</a> -->
      <a href="logout.php" class="btn btn-secondary">Join Now</a>

      <button class="nav-open-btn" aria-label="open menu" data-nav-toggler>
        <span class="line"></span>
        <span class="line"></span>
        <span class="line"></span>
      </button>

    </div>
  </header>





  <main>
    <article>

      <!-- 
        - #HERO
      -->

      <section class="section hero bg-dark has-after has-bg-image" id="home" aria-label="hero" data-section
        style="background-image: url('./assets/images/hero-bg.png')">
        <div class="container">

          <div class="hero-content">

            <p class="hero-subtitle">
              <strong class="strong">Only Male</strong>
            </p>

            <h1 class="h1 hero-title">Work Hard To Get Better Life</h1>

            <p class="section-text">
              What seems it possible today will one-day becomes your warm up
            </p>

            <a href="login.html" class="btn btn-primary">Get Started</a>

          </div>

          <div class="hero-banner">

            <img src="./assets/images/hero-banner.png" width="660" height="753" alt="hero banner" class="w-100">

            <img src="./assets/images/hero-circle-one.png" width="666" height="666" aria-hidden="true" alt=""
              class="circle circle-1">
            <img src="./assets/images/hero-circle-two.png" width="666" height="666" aria-hidden="true" alt=""
              class="circle circle-2">

            <img src="./assets/images/heart-rate.svg" width="255" height="270" alt="heart rate"
              class="abs-img abs-img-1">
            <img src="./assets/images/calories.svg" width="348" height="224" alt="calories" class="abs-img abs-img-2">

          </div>

        </div>
      </section>

      <!-- 
    - #FOOTER
  -->

      <footer class="footer">

        <div class="section footer-top bg-dark has-bg-image"
          style="background-image: url('./assets/images/footer-bg.png')">
          <div class="container">

            <div class="footer-brand">

              <a href="#" class="logo">
                <ion-icon name="barbell-sharp" aria-hidden="true"></ion-icon>

                <span class="span">The Boyz</span>
              </a>

              <p class="footer-brand-text">
                Etiam suscipit fringilla ullamcorper sed malesuada urna nec odio.
              </p>

              <div class="wrapper">

                <img src="./assets/images/footer-clock.png" width="34" height="34" loading="lazy" alt="Clock">

                <ul class="footer-brand-list">

                  <li>
                    <p class="footer-brand-title">Monday - Friday</p>

                    <p>7:00Am - 10:00Pm</p>
                  </li>

                  <li>
                    <p class="footer-brand-title">Saturday - Sunday</p>

                    <p>7:00Am - 2:00Pm</p>
                  </li>

                </ul>

              </div>

            </div>

            <ul class="footer-list">

              <li>
                <p class="footer-list-title has-before">Our Links</p>
              </li>

              <li>
                <a href="#" class="footer-link">Home</a>
              </li>

              <li>
                <a href="#" class="footer-link">About Us</a>
              </li>

              <li>
                <a href="#" class="footer-link">Courses</a>
              </li>

              <li>
                <a href="#" class="footer-link">Nutrition</a>
              </li>

              <li>
                <a href="#" class="footer-link">Contact Us</a>
              </li>

            </ul>

            <ul class="footer-list">

              <li>
                <p class="footer-list-title has-before">Contact Us</p>
              </li>

              <li class="footer-list-item">
                <div class="icon">
                  <ion-icon name="location" aria-hidden="true"></ion-icon>
                </div>

                <address class="address footer-link">
                  1247/Plot No. 39, 15th Phase, Colony, Kukatpally, Hyderabad
                </address>
              </li>

              <li class="footer-list-item">
                <div class="icon">
                  <ion-icon name="call" aria-hidden="true"></ion-icon>
                </div>

                <div>
                  <a href="tel:18001213637" class="footer-link">1800-121-3637</a>

                  <a href="tel:+915552348765" class="footer-link">+91 555 234-8765</a>
                </div>
              </li>

              <li class="footer-list-item">
                <div class="icon">
                  <ion-icon name="mail" aria-hidden="true"></ion-icon>
                </div>

                <div>
                  <a href="mailto:info@fitlife.com" class="footer-link">info@fitlife.com</a>

                  <a href="mailto:services@fitlife.com" class="footer-link">services@fitlife.com</a>
                </div>
              </li>

            </ul>


          </div>
        </div>

        <div class="footer-bottom">
          <div class="container">

            <p class="copyright">
              &copy; 2023 The Boyz. All Rights Reserved By <a href="#" class="copyright-link">@KBPCOE123456</a>
            </p>

            <ul class="footer-bottom-list">

              <li>
                <a href="#" class="footer-bottom-link has-before">Privacy Policy</a>
              </li>

              <li>
                <a href="#" class="footer-bottom-link has-before">Terms & Condition</a>
              </li>

            </ul>

          </div>
        </div>

      </footer>





      <!-- 
    - #BACK TO TOP
  -->

      <a href="#top" class="back-top-btn" aria-label="back to top" data-back-top-btn>
        <ion-icon name="caret-up-sharp" aria-hidden="true"></ion-icon>
      </a>





      <!-- 
    - custom js link
  -->
      <script src="./assets/js/script.js" defer></script>

      <!-- 
    - ionicon link
  -->
      <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
      <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>

</html>