<?php
session_start();
if (!isset($_SESSION["user"])) {
   header("Location: ExpoloreMore.php");

}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            background-color: hsl(212, 9%, 67%);


        }

        .Explore {
            width: 100%;
            margin-top: 120px;
        }

        .Explore h1,
        p {
            margin-top: 20px;
            text-align: center;
            color: black;
            font-size: larger;
            font-family: Georgia, 'Times New Roman', Times, serif;
        }
    </style>
    <title>Explore More</title>
</head>

<body>
    <div class="Explore">
        <h1>THIS IS ABOUT THE EXPERINCE OF OUR GYM COACH</h1>
        <p>
            Cardio exercise, which is sometimes referred to as aerobic exercise, is any rhythmic activity that raises
            your heart rate into your target heart rate zone. This is the zone where you burn the most fat and calories.
            Some of the most common examples of cardio include walking, cycling, and swimming. However, even household
            chores like vacuuming and mopping can qualify as cardio exercise.
            Part of what sets cardio apart from other types of exercise—such as strength training—is that it relies on
            your body's ability to use oxygen during the workout session. A person's cardio ability or capacity can vary
            based on a number of factors.
            Research published by the American Heart Association reports that genetics have a 20% to 40% influence over
            what you can do cardio-wise.1 Also, females tend to have a 25% lower cardio capacity than males and, for
            both sexes, this capacity tends to decline with age.
            This is not to say that your genes, sex, or age will prevent you from improving your cardiovascular health.
            But it does help to know that there are many factors that can influence how (and how well) your body
            responds to cardio exercise. Your first step in choosing the right cardio workout for you is to figure out
            what kind of activities you enjoy. Think about what fits your personality and what you'd feel comfortable
            fitting into your life. This is key because if you don't like the exercise, you're less likely to stick with
            it long-term.
            If you like to go outdoors, running, cycling, and walking are all good choices. If you prefer going to the
            gym, you have access to many options in the form of stationary bikes, elliptical trainers, treadmills,
            rowing machines, climbers, the pool, and more.
            Want to increase your heart rate at home? You can do at-home cardio exercises like jumping rope, jumping
            jacks, jogging in place, and burpees. Another option is to buy your own treadmill or elliptical machine. You
            might also consider using:
            Exercise DVDs
            Fitness apps
            Online workouts
            You may not even know what you like yet. In this case, try several different activities to find the one or
            ones that you enjoy most. This process can be hit or miss, so don't be afraid to try something and, if it
            doesn't work, move on to something else.
        </p>
    </div>
</body>

</html>