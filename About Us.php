<?php
session_start();
if (!isset($_SESSION["user"])) {
   header("Location: index.php");

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
  <title>About Us</title>
</head>

<body>
  <header style="background-color: black;" class="header" data-header>

    <div class="container">

      <a href="index.php" class="logo">
        <ion-icon name="barbell-sharp" aria-hidden="true" role="img" class="md hydrated"></ion-icon>

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
            <a href="About Us.php" class="navbar-link active" data-nav-link>About Us</a>
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

      <a href="login.php" class="btn btn-secondary">Join Now</a>

      <button class="nav-open-btn" aria-label="open menu" data-nav-toggler>
        <span class="line"></span>
        <span class="line"></span>
        <span class="line"></span>
      </button>

    </div>
  </header>

  <section class="section about" id="about" aria-label="about">

    <div class="container">

      <div class="about-banner has-after">
        <img src="./assets/images/image-removebg-preview.png" width="660" height="648" loading="lazy" alt="about banner"
          class="w-100">

        <img src="./assets/images/about-circle-one.png" width="660" height="534" loading="lazy" aria-hidden="true"
          alt="" class="circle circle-1">
        <img src="./assets/images/about-circle-two.png" width="660" height="534" loading="lazy" aria-hidden="true"
          alt="" class="circle circle-2">

        <img src="./assets/images/fitness.png" width="650" height="154" loading="lazy" alt="fitness"
          class="abs-img w-100">
      </div>

      <div class="about-content">

        <p class="section-subtitle">About Us</p>

        <h2 class="h2 section-title">Welcome To Our Fitness Gym</h2>

        <p class="section-text">
          Welcome to our gym website! At our gym, we believe that fitness is not just a hobby, but a way of life. We
          strive to provide our members with top-notch facilities, professional guidance, and a supportive community to
          help them achieve their fitness goals.

          Our gym is equipped with state-of-the-art equipment and amenities to provide our members with a comfortable
          and convenient workout experience. We offer a wide range of fitness classes, including yoga, strength
          training, cardio, and more, to cater to the diverse needs of our members.

          Our team of certified personal trainers and fitness instructors are dedicated to helping our members reach
          their goals. They work closely with our members to create personalized workout plans, provide expert guidance,
          and motivate them to stay on track.
        </p>

        <p class="section-text">
          At our gym, we believe that fitness is not just about physical strength, but also about mental health and
          well-being. We offer various programs and workshops to help our members manage stress, improve their mental
          health, and lead a balanced lifestyle.

          Our community of members is supportive, friendly, and welcoming. We believe that working out together creates
          a sense of camaraderie and accountability that helps our members stay committed to their fitness goals.

          Thank you for considering our gym for your fitness journey. We look forward to welcoming you to our community
          and helping you achieve your fitness goals!
        </p>

        <div class="wrapper">

          <div class="about-coach">

            <figure class="coach-avatar">
              <img src="./assets/images/about-coach.jpg" width="65" height="65" loading="lazy" alt="Trainer">
            </figure>

            <div>
              <h3 class="h3 coach-name">Shubham Khandare</h3>

              <p class="coach-title">Our Coach</p>
            </div>

          </div>

          <a href="ExpoloreMore.php" class="btn btn-primary">Explore More</a>

        </div>

      </div>

    </div>
  </section>
  <script src="./assets/js/script.js" defer></script>

</body>

</html>