<?php
session_start();

if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] != true) {
  header("location: login.php");
  exit;
}
?>
<!doctype html>
<html lang="en">


<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
  <link rel="stylesheet" href="Style2.css">
  <title>Welcome- <?php echo $_SESSION['username'] ?> </title>
</head>
<style>
  .fot {
    text-align: center;
  }
</style>


<body>
  <?php
  require "partial/_nav_bar.php";
  ?>
  <section id="home">
    <h1 class="h-primary">Unlock your fitness</h1>
    <p>Improve your self to be a better self by choosing the right thing
    </p>
    <p>
      follow the path of your success by selecting gym fit for exercise and diet.
    </p>   
  </section>
  <div class="container my-3">

    <div class="alert alert-success" role="alert">
      <h4 class="alert-heading"> Welcome- <?php echo $_SESSION['username'] ?></h4>
      <p>hey how are you doing?welcome to isecure .<?php echo $_SESSION['username'] ?>.you are logged in as Aww yeah, you successfully read this important alert message. This example text is going to run a bit longer so that you can see how spacing within an alert works with this kind of content.</p>
      <hr>
      <p class="mb-0">Whenever you need to, be sure to logged out.<a href="/LOGIN_SYSTEM/logout.php">using this link</a></p>
    </div>
  </div>

  <div class="container my-3">

    <div class="row">
      <div class="col">
        <div class="card">
          <img src="day-2.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Day-1</h5>
            <p class="card-text">
            <ul>
              <li>
                <strong>Breakfast:</strong> Spinach and feta omelet, whole grain toast, fresh fruit.
              </li>
              <li>
                <strong>Snacks:</strong> Almonds or walnuts, string cheese, Greek yogurt with granola and banana.
              </li>

              <li>
                <strong>Lunch:</strong> Grilled vegetable wrap with hummus, side salad.
              </li>

              <li>
                <strong>Dinner:</strong> Baked chicken with sweet potatoes and green beans, quinoa or brown rice</li>
              </li>
            </ul>
            </p>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card">
          <img src="day-2.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Day-2</h5>
            <p class="card-text">
            <ul>
              <li>
                <strong>Breakfast:</strong> Greek yogurt, berries, chia seeds, avocado toast, boiled egg.
              </li>
              <li>
                <strong>Snacks:</strong> Mixed nuts, hummus with veggies.
              </li>
              <li>
                <strong>Lunch:</strong> Grilled chicken salad.
              </li>
              <li>
                <strong>Dinner:</strong> Baked salmon, broccoli, quinoa, fruit salad. Optional: Greek yogurt with honey.
              </li>
            </ul>
            </p>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card">
          <img src="day-2.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Day-3</h5>
            <p class="card-text">
            <ul>
              <li>
                <strong>Breakfast:</strong> Smoothie bowl with spinach, banana, almond milk, protein powder, almonds, and berries.
              </li>
              <li>
                <strong>Snacks:</strong> Rice cakes with almond butter, Greek yogurt with honey and cinnamon.
              </li>
              <li>
               <strong>Lunch:</strong> Quinoa and black bean salad with veggies and lime-cilantro dressing.
              </li>
              <li>
                <strong>Dinner:</strong> Grilled tofu stir-fry with broccoli, carrots, snap peas, and brown rice.</p>
              </li>
            </ul>  



          </div>
        </div>
      </div>
      <div class="col">
        <div class="card">
          <img src="day-2.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Don't stop here</h5>
            <p class="card-text">
              <strong><i>Don't lose your progress....</i></strong>
              Take subscription and continue your journey
              <p>For Diet plan refer this</p><a href="dietplan.html">Diet</a>

            </p>
          </div>
        </div>
      </div>

    </div>
  </div>

  <div class="container my-3">

    <div class="row">
      <div class="col">
        <div class="card">
          <img src="gym-photo.jpeg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Day-1</h5>
            <p class="card-text">
              <ul>
                <li>
                  <strong>Warm-up:</strong> 5-10 minutes of light cardio.
                </li>
                <li>
                  <strong>Strength Training:</strong> Squats, push-ups, bent-over rows, dumbbell shoulder press, plank (3 sets of 10-12 reps each).
                </li>
                <li>
                  <strong>Cardio:</strong> Interval training (5 mins moderate, 1 min high intensity, repeat for 20-25 mins).
                </li>
                <li>
                  <strong>Cool-down:</strong> 5-10 mins of stretching
                </li>
              </ul>
            </p>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card">
          <img src="gym-photo.jpeg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Day-2</h5>
            <p class="card-text">
            <ul>
              <li>
                <strong>Warm-up:</strong> 5-10 minutes of light cardio.
              </li>
              <li>
                <strong>Upper Body Workout:</strong> Bench press or dumbbell chest press, pull-ups or lat pulldowns, bicep curls, tricep dips or pushdowns (3 sets of 10-12 reps each).
              </li>
              <li>
                <strong>Core Workout:</strong> Plank variations, Russian twists or bicycle crunches (3 sets of 30-60 seconds each or 15-20 reps each side).
              </li>
              <li>
                <strong>Cool-down:</strong> 5-10 minutes of upper body and core stretching.
              </li>
            </ul>
            </p>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card">
          <img src="gym-photo.jpeg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Day-3</h5>
            <p class="card-text">
            <ul>
              <li>
                <strong>Warm-up:</strong> 5-10 minutes of light cardio.
              </li>
              <li>
                <strong>Lower Body Workout:</strong> Squats or goblet squats, deadlifts or Romanian deadlifts, leg press or lunges, calf raises (3 sets of 10-12 reps each).
              </li>
              <li>
                <strong>Cardio:</strong> 20-30 minutes of steady-state cardio.
              </li>
              <li>
                <strong>Cool-down:</strong> 5-10 minutes of lower body stretching.
              </li>
            </ul> 
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card">
          <img src="gym-photo.jpeg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Don't stop here</h5>
            <p class="card-text">
              <strong><i>Don't lose your progress....</i></strong>
              Take subscription and continue your journey
              <p>For Gym plan refer this</p><a href="gym-plan.html">Gym</a>

            </p>
          </div>
        </div>
      </div>

    </div>
  </div>
  <footer class="container my-3 fot">
    &copy; copyright group 4 @2024
  </footer>
  <!-- Optional JavaScript; choose one of the two! -->

  <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

  <!-- Option 2: Separate Popper and Bootstrap JS -->
  <!--
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
    -->
</body>

</html>