<!doctype html>
<html lang="en">

<head>
  <?php
  // Include file with meta tags and head links
  include("headLinks.html"); ?>
  <title>Gamer Kingdom</title>
</head>

<body>
  <?php
  // Include file with navbar
  include("navbar.php"); ?>

  <!-- Bootstrap "Carousel" component altered to display random image on each refresh -->
  <!-- id changed to myCarousel, data-interval added to have slides change every 4 seconds -->
  <div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="4000">
    <ol class="carousel-indicators">
      <!-- id's and classes added to each indicator to be targeted by JavaScript function below -->
      <!-- active class removed from first indicator to be added randomly by Javascript function below -->
      <li id="carouselIndicator1" class="carouselInd" data-target="#myCarousel" data-slide-to="0"></li>
      <li id="carouselIndicator2" class="carouselInd" data-target="#myCarousel" data-slide-to="1"></li>
      <li id="carouselIndicator3" class="carouselInd" data-target="#myCarousel" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <!-- id's added to each carousel slide to be targeted by JavaScript function below -->
      <!-- active class removed from first slide to be added randomly by Javascript function below -->
      <div id="carouselSlider1" class="carousel-item">
        <!-- img-fluid added to each image below to have responsive images that scales to parent element -->
        <img src="images/carousel/resEvilBig.jpg" class="mx-auto d-block img-fluid" alt="Carousel Image">
        <!-- carouselCaptionRightMid added to adjust position of captions -->
        <div class="carousel-caption d-none d-md-block carouselCaptionRightMid">
          <h1>Resident Evil Village</h1>
          <h3>Prepare for horror!</h3>
          <br>
          <h3>Available in our Online Shop!</h3>
        </div>
      </div>
      <div id="carouselSlider2" class="carousel-item">
        <img src="images/carousel/fifaTwentyOneBig.jpg" class="mx-auto d-block img-fluid" alt="Carousel Image">
        <!-- carouselCaptionLeftMid added to adjust position of captions -->
        <div class="carousel-caption d-none d-md-block carouselCaptionLeftMid">
          <h1>Fifa 21</h1>
          <h3>It's in the game!</h3>
          <br>
          <h3>Available in our Online Shop!</h3>
        </div>
      </div>
      <div id="carouselSlider3" class="carousel-item">
        <img src="images/carousel/biomutantBig.jpg" class="mx-auto d-block img-fluid" alt="Carousel Image">
        <!-- carouselCaptionRightLow added to adjust position of captions -->
        <div class="carousel-caption d-none d-md-block carouselCaptionRightLow">
          <h1>Biomutant</h1>
          <h3>Action role-playing Fun!</h3>
          <br>
          <h3>Available June 24th!</h3>
        </div>
      </div>
    </div>
    <!-- Carousel control icons removed here -->
    <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
    </a>
    <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
    </a>
  </div>
  <!-- END OF Bootstrap "Carousel" component -->

  <!-- Bootstrap "Media object" component to display news articles -->
  <!-- mt-5 added to create gap between media object and carousel-->
  <div class="container mt-5">
    <ul class="list-unstyled">
      <li class="media">
        <img src="images/media/e3.jpg" class="mr-3" alt="Media Image">
        <div class="media-body">
          <h4 class="mt-0 mb-1">Record Attendance At E3 Gaming Convention</h4>
          <p>All my girls vintage Chanel baby. So you can have your cake. Tonight, tonight, tonight, I'm walking on air. Slowly swallowing down my fear, yeah yeah. Growing fast into a bolt of lightning. So hot and heavy, 'Til dawn. That fairy tale ending with a knight in shining armor. Heavy is the head that wears the crown. All my girls vintage Chanel baby. So you can have your cake. Tonight, tonight, tonight, I'm walking on air. Slowly swallowing down my fear, yeah yeah. Growing fast into a bolt of lightning. So hot and heavy, 'Til dawn. That fairy tale ending with a knight in shining armor. Heavy is the head that wears the crown. </p>
        </div>
      </li>
      <li class="media my-4">
        <div class="media-body">
          <h4 class="mt-0 mb-1">Study Reveals Gaming Health Benefits</h4>
          <p>Maybe a reason why all the doors are closed. Cause once you’re mine, once you’re mine. Be your teenage dream tonight. Heavy is the head that wears the crown. It's not even a holiday, nothing to celebrate. A perfect storm, perfect storm. All my girls vintage Chanel baby. So you can have your cake. Tonight, tonight, tonight, I'm walking on air. Slowly swallowing down my fear, yeah yeah. Growing fast into a bolt of lightning. So hot and heavy, 'Til dawn. That fairy tale ending with a knight in shining armor. Heavy is the head that wears the crown.</p>
        </div>
        <!-- Image moved below paragrapgh to have it displayed on right of page -->
        <!-- mr-3 class removed and replaced with ml-3 -->
        <img src="images/media/brain.png" class="ml-3" alt="Media Image">
      </li>
      <li class="media">
        <img src="images/media/sonic.jpg" class="mr-3" alt="Media Image">
        <div class="media-body">
          <h4 class="mt-0 mb-1">Sony Completes Sega Acquisition</h4>
          <p>Are you brave enough to let me see your peacock? There’s no going back. This is the last time you say, after the last line you break. At the eh-end of it all. All my girls vintage Chanel baby. So you can have your cake. Tonight, tonight, tonight, I'm walking on air. Slowly swallowing down my fear, yeah yeah. Growing fast into a bolt of lightning. So hot and heavy, 'Til dawn. That fairy tale ending with a knight in shining armor. Heavy is the head that wears the crown.</p>
        </div>
      </li>
    </ul>
  </div>

  <!-- My JavaScript -->
  <script>
    // When the page refreshes this function will run
    document.addEventListener("DOMContentLoaded", function(event) {
      // A random number between 1 and 3 is generated
      var num = Math.floor(Math.random() * 3) + 1;
      // The elements with this number in the id is set to these variables
      var slide = document.getElementById(("carouselSlider") + num);
      var indicator = document.getElementById(("carouselIndicator") + num);
      /* If the variables are set the active class is added to the slide 
      and indicator that the number corresponds to */
      if (slide && indicator) {
        slide.classList.add("active");
        indicator.classList.add("active");
      } else {
        // Else the first slide and indicator is set as active
        document.querySelectorAll(".carouselInd")[0].classList.add("active");
        document.querySelectorAll(".carousel-item")[0].classList.add("active");
      }
    });
  </script>

  <!-- Bootstrap JavaScript -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

</body>

</html>