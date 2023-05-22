<?php
session_start();
if (!isset($_SESSION["user"])) {
   header("Location: Nutrition.php");

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
  <title>Nutrition</title>
</head>

<body>
  <header style="background-color: black;" class="header" data-header>
    <div class="container">

      <a href="index.php" class="logo" img="">
        <ion-icon name="barbell-sharp" aria-hidden="true"></ion-icon>

        <span class="span" style="z-index: 100;">The Boyz</span>
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
            <a href="Classes.php" class="navbar-link" data-nav-link>Classes</a>
          </li>

          <li>
            <a href="Nutrition.php" class="navbar-link active" data-nav-link>Nutrition</a>
          </li>

          <li>
            <a href="Contact Us.php" class="navbar-link" data-nav-link>Contact Us</a>
          </li>

        </ul>

      </nav>

      <a href="login.html" class="btn btn-secondary">Join Now</a>

      <button class="nav-open-btn" aria-label="open menu" data-nav-toggler>
        <span class="line"></span>
        <span class="line"></span>
        <span class="line"></span>
      </button>

    </div>
  </header>

  <section class="section blog" id="blog" aria-label="blog">
    <div class="container">

      <p class="section-subtitle">Our Nutrition Plan</p>

      <h2 class="h2 section-title text-center">“You are what you eat, so don't be fast, cheap, easy, or fake.” </h2>

      <ul class="blog-list has-scrollbar">

        <li class="scrollbar-item">
          <div class="blog-card">

            <div class="card-banner img-holder" style="--width: 440; --height: 270;">
              <img src="./assets/images/blog-1.jpg" width="440" height="270" loading="lazy"
                alt="Going to the gym for the first time" class="img-cover">


            </div>

            <div class="card-content">

              <h3 class="h3">
                <a href="#" class="card-title">Food for Thought</a>
              </h3>

              <p class="card-text">
                Good nutrition is a lifestyle, not a diet. It starts with a new way of thinking about food. Think of
                your body as a vehicle that uses food for fuel. Fill your tank with the right type of fuelDo not
                approach your nutrition plan as a diet plan, but rather, a lifestyle change. If you make a permanent
                change, you will see big results.
              <p>The key to success is a daily focus on your goal.Portion your meals and track your calories. There are
                many free mobile apps available to help track your activity level and calories.Control impulsive urges
                to buy junk food, and instead, allow yourself to one "cheat" meal a week.
              </p>
              </p>


              <a href="#" class="btn-link has-before">Read More</a>

            </div>

          </div>
        </li>

        <li class="scrollbar-item">
          <div class="blog-card">

            <div class="card-banner img-holder" style="--width: 440; --height: 270;">
              <img src="./assets/images/blog-2.jpg" width="440" height="270" loading="lazy"
                alt="Parturient accumsan cacus pulvinar magna" class="img-cover">


            </div>

            <div class="card-content">

              <h3 class="h3">
                <a href="#" class="card-title">What to Eat</a>
              </h3>

              <p class="card-text">
                Use the following as a guideline:
                <br>

                Protein, such as eggs, chicken, and lean red meat
                Vegetables, but avoid corn and peas
                Fruit
                Fat, such as olive oil, nuts, and seeds
                Limit the consumption of bread, pasta, white potatoes, and processed food. These foods are high in
                carbohydrates.

                When you shop for groceries, shop the outside aisles and buy organic when possible. Stock up on fresh
                vegetables, almond flour, and flax seed.

                Check out our Meal of the Week for new meal ideas.
              </p>

              <a href="#" class="btn-link has-before">Read More</a>

            </div>

          </div>
        </li>

        <li class="scrollbar-item">
          <div class="blog-card">

            <div class="card-banner img-holder" style="--width: 440; --height: 270;">
              <img src="./assets/images/blog-3.jpg" width="440" height="270" loading="lazy"
                alt="Risus purus namien parturient accumsan cacus" class="img-cover">

            </div>

            <div class="card-content">

              <h3 class="h3">
                <a href="#" class="card-title">Meal of the Week</a>
              </h3>

              <p class="card-text">
                Herb Roasted Chicken
                <br>
                <strong> Ingredients:</strong>
                <br>
                boneless, skinless chicken breast (organic preferred)
                1 tsp Herbes de Provence
                1 tsp lemon juice
                1 tsp olive oil
                1 tsp sea salt
                ¼ tsp pepper
                <strong> Instructions:</strong>
                <br>
                Combine all ingredients in a plastic bag and marinate for at least an hour. Preheat oven to 350 degrees.
                Bake chicken for 30-35 minutes or until juices run clear. Broil on high for two minutes or until brown.
                Serve with a fresh side salad.
              </p>

              <a href="#" class="btn-link has-before">Read More</a>

            </div>

          </div>
        </li>

      </ul>

    </div>
  </section>

  </article>
  </main>

</body>

</html>