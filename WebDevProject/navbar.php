<?php
// Start a session or resume current session
session_start();
?>

<!-- Bootstrap "Navbar" component to be displayed on all web pages -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <!-- Icons from Font Awesome added to the site logo here -->
  <a class="navbar-brand" href="home.php"><i class="fas fa-crown"></i>Gamer Kingdom <i class="fas fa-gamepad gamePadIcon"></i></a>

  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">

    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="home.php">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="shop.php">Shop</a>
      </li>
      <?php
      // If username is set in the session display the Log Out link and the user welcome message
      if (isset($_SESSION["username"])) {
        echo  "<li class='nav-item'><a class='nav-link' href='logout.php'>Log Out</a></li>";
        echo  "<li class='nav-item'><span class='nav-link'>Welcome " . $_SESSION["username"] . "!</span></li>";
      } else {
        // Else display the Register and Login links
        echo "
        <li class='nav-item'>
          <a class='nav-link' href='register.php'>Register</a>
        </li>
        <li class='nav-item'>
          <a class='nav-link' href='login.php'>Login</a>
        </li>";
      }
      ?>
    </ul>
    <!-- ml-auto added to have Basket displayed to the right of the navbar -->
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <!-- Basket icon from Font Awesome added here -->
        <a class="nav-link" href="basket.php">Basket <i class="fas fa-shopping-basket"></i>
          <?php
          // If basket is set in the session display the count of products in the basket
          // Else if basket is emptied display a blank space
          if (isset($_SESSION['basket'])) {
            $count = count($_SESSION['basket']);
            echo "<span class='text-warning'>" . ($count > 0 ? $count : '&nbsp;') . "</span>";
          } else {
            // If basket is not set display a blank space
            echo "<span>&nbsp;</span>";
          }
          ?>
        </a>
      </li>
    </ul>
  </div>
</nav>
<!-- END OF Bootstrap "Navbar" component -->