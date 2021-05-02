<!doctype html>
<html lang="en">

<head>
  <?php require_once("headLinks.html"); ?>
  <link rel="stylesheet" href="style/home.css">
  <title>Gamer Kingdom</title>
</head>

<body>
  <?php require_once("php/header.php"); ?>

  <div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="4000">
    <ol class="carousel-indicators">
      <li id="carouselIndicator1" class="carouselInd" data-target="#myCarousel" data-slide-to="0"></li>
      <li id="carouselIndicator2" class="carouselInd" data-target="#myCarousel" data-slide-to="1"></li>
      <li id="carouselIndicator3" class="carouselInd" data-target="#myCarousel" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div id="carouselSlider1" class="carousel-item">
        <img src="images/carousel/resEvilBig.jpg" class="mx-auto d-block img-fluid" alt="Carousel Image">
        <div class="carousel-caption d-none d-md-block carouselCaptionRight">
          <h1>Resident Evil</h1>
          <p>Prepare for horror!</p>
        </div>
      </div>
      <div id="carouselSlider2" class="carousel-item">
        <img src="images/carousel/secExtinctionBig.jpg" class="mx-auto d-block img-fluid" alt="Carousel Image">
        <div class="carousel-caption d-none d-md-block carouselCaptionLeftBottom">
          <h1>Second Extinction</h1>
          <p>Fight for your life!</p>
        </div>
      </div>
      <div id="carouselSlider3" class="carousel-item">
        <img src="images/carousel/mLB21Big.jpg" class="mx-auto d-block img-fluid" alt="Carousel Image">
        <div class="carousel-caption d-none d-md-block carouselCaptionLeftTop">
          <h1>MLB 21</h1>
          <p>It's in the game!</p>
        </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
    </a>
    <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
    </a>
  </div>

  <div class="container mediaContainer">
    <ul class="list-unstyled">
      <li class="media">
        <img src="images/media/e3.jpg" class="mr-3" alt="Media Image">
        <div class="media-body">
          <h4 class="mt-0 mb-1">Record Attendance At E3</h4>
          <p>All my girls vintage Chanel baby. So you can have your cake. Tonight, tonight, tonight, I'm walking on air. Slowly swallowing down my fear, yeah yeah. Growing fast into a bolt of lightning. So hot and heavy, 'Til dawn. That fairy tale ending with a knight in shining armor. Heavy is the head that wears the crown. All my girls vintage Chanel baby. So you can have your cake. Tonight, tonight, tonight, I'm walking on air. Slowly swallowing down my fear, yeah yeah. Growing fast into a bolt of lightning. So hot and heavy, 'Til dawn. That fairy tale ending with a knight in shining armor. Heavy is the head that wears the crown. </p>
        </div>
      </li>
      <li class="media my-4">

        <div class="media-body">
          <h4 class="mt-0 mb-1">Study Reveals Gaming Health Benefits</h4>
          <p>Maybe a reason why all the doors are closed. Cause once you’re mine, once you’re mine. Be your teenage dream tonight. Heavy is the head that wears the crown. It's not even a holiday, nothing to celebrate. A perfect storm, perfect storm. All my girls vintage Chanel baby. So you can have your cake. Tonight, tonight, tonight, I'm walking on air. Slowly swallowing down my fear, yeah yeah. Growing fast into a bolt of lightning. So hot and heavy, 'Til dawn. That fairy tale ending with a knight in shining armor. Heavy is the head that wears the crown.</p>
        </div>
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

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

  <script>
    document.addEventListener("DOMContentLoaded", function(event) {
      var num = Math.floor(Math.random() * 3) + 1;
      var slide = document.getElementById(("carouselSlider") + num);
      var indicator = document.getElementById(("carouselIndicator") + num);

      if (slide && indicator) {
        slide.classList.add("active");
        indicator.classList.add("active");
      } else {
        document.querySelectorAll(".carouselInd")[0].classList.add("active");
        document.querySelectorAll(".carousel-item")[0].classList.add("active");
      }
    });
  </script>
</body>

</html>