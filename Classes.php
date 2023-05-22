<?php
session_start();
if (!isset($_SESSION["user"])) {
   header("Location: Classes.php");

}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="assets/js/script.js">

  <title>Classes</title>
</head>

<body>
  <header style="background-color: black;" class="header" data-header>

    <div class="container">

      <a href="index.php" class="logo">
        <ion-icon name="barbell-sharp" aria-hidden="true"></ion-icon>

        <span class="span">The Boyz</span>
      </a>

      <nav class="navbar" data-navbar>

        <button class="nav-close-btn" aria-label="close menu" data-nav-toggler>
          <ion-icon name="close-sharp" aria-hidden="true"></ion-icon>
        </button>

        <ul class="navbar-list">

          <li>
            <a href="index.php" class="navbar-link" data-nav-link>Home</a>

          </li>
          <li>
            <a href="About Us.php" class="navbar-link" data-nav-link>About Us</a>
          </li>

          <li>
            <a href="Classes.php" class="navbar-link active" data-nav-link>Classes</a>
          </li>

          <li>
            <a href="Nutrition.php" class="navbar-link" data-nav-link>Nutrition</a>
          </li>

          <li>
            <a href="Contact Us.php" class="navbar-link" data-nav-link>Contact Us</a>
          </li>

        </ul>

      </nav>

      <a href="login.php" class="btn btn-secondary">Join Now</a>

      <button class="nav-open-btn" aria-label="open menu" data-nav-toggler>
        <span class="line"></span>
        <span class="line"></span>
        <span class="line"></span>
      </button>

    </div>
  </header>
  <section class="section class bg-dark has-bg-image" id="class" aria-label="class"
    style="background-image: url('./assets/images/classes-bg.png')">
    <div class="container">

      <p class="section-subtitle">Our Classes</p>

      <h2 class="h2 section-title text-center">Fitness Courses For Everybody</h2>

      <ul class="class-list has-scrollbar">

        <li class="scrollbar-item">
          <div class="class-card">

            <figure class="card-banner img-holder" style="--width: 416; --height: 240;">
              <img src="./assets/images/class-1.jpg" width="416" height="240" loading="lazy" alt="Weight Lifting"
                class="img-cover">
            </figure>

            <div class="card-content">

              <div class="title-wrapper">
                <img src="./assets/images/class-icon-1.png" width="52" height="52" aria-hidden="true" alt=""
                  class="title-icon">

                <h3 class="h3">
                  <a href="#" class="card-title">Weight Lifting</a>
                </h3>
              </div>

              <p class="card-text">
                Suspendisse nisi libero, cursus ac magna sit amet, fermentum imperdiet nisi.
              </p>

              <div class="card-progress">

                <div class="progress-wrapper">

                </div>

                <div class="progress-bg">

                </div>

              </div>

            </div>

          </div>
        </li>

        <li class="scrollbar-item">
          <div class="class-card">

            <figure class="card-banner img-holder" style="--width: 416; --height: 240;">
              <img src="./assets/images/class-2.jpg" width="416" height="240" loading="lazy" alt="Cardio & Strenght"
                class="img-cover">
            </figure>

            <div class="card-content">

              <div class="title-wrapper">
                <img src="./assets/images/class-icon-2.png" width="52" height="52" aria-hidden="true" alt=""
                  class="title-icon">

                <h3 class="h3">
                  <a href="#" class="card-title">Cardio & Strenght</a>
                </h3>
              </div>

              <p class="card-text">
                Suspendisse nisi libero, cursus ac magna sit amet, fermentum imperdiet nisi.
              </p>

              <div class="card-progress">



              </div>

            </div>

          </div>
        </li>

        <li class="scrollbar-item">
          <div class="class-card">

            <figure class="card-banner img-holder" style="--width: 416; --height: 240;">
              <img src="./assets/images/class-3.jpg" width="416" height="240" loading="lazy" alt="Power Yoga"
                class="img-cover">
            </figure>

            <div class="card-content">

              <div class="title-wrapper">
                <img src="./assets/images/class-icon-3.png" width="52" height="52" aria-hidden="true" alt=""
                  class="title-icon">

                <h3 class="h3">
                  <a href="#" class="card-title">Power Yoga</a>
                </h3>
              </div>

              <p class="card-text">
                Suspendisse nisi libero, cursus ac magna sit amet, fermentum imperdiet nisi.
              </p>

              <div class="card-progress">



              </div>

            </div>

          </div>
        </li>

        <li class="scrollbar-item">
          <div class="class-card">

            <figure class="card-banner img-holder" style="--width: 416; --height: 240;">
              <img src="./assets/images/class-4.jpg" width="416" height="240" loading="lazy" alt="The Fitness Pack"
                class="img-cover">
            </figure>

            <div class="card-content">

              <div class="title-wrapper">
                <img src="./assets/images/class-icon-4.png" width="52" height="52" aria-hidden="true" alt=""
                  class="title-icon">

                <h3 class="h3">
                  <a href="#" class="card-title">The Fitness Pack</a>
                </h3>
              </div>

              <p class="card-text">
                Suspendisse nisi libero, cursus ac magna sit amet, fermentum imperdiet nisi.
              </p>

              <div class="card-progress">



              </div>

            </div>

          </div>
        </li>

      </ul>

    </div>
  </section>
  <script src="./assets/js/script.js" defer></script>
</body>

</html>