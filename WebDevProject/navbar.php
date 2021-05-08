<?php
session_start();
?>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">

  <a class="navbar-brand" href="home.php"><i class="fas fa-crown"></i>Gamer Kingdom <i class="fas fa-gamepad"></i></a>

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
      if (isset($_SESSION["username"])) {
        echo  "<li class='nav-item'><a class='nav-link' href='logout.php'>Log Out</a></li>";
        echo  "<li class='nav-item'><a class='nav-link'>Welcome " . $_SESSION["username"] . "!</a></li>";
      } else {
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
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a class="nav-link" href="basket.php">Basket <i class="fas fa-shopping-basket"></i>
          <?php
          if (isset($_SESSION['basket'])) {
            $count = count($_SESSION['basket']);
            echo "<span class='text-warning'>" . ($count > 0 ? $count : '&nbsp;') . "</span>";
          } else {
            echo "<span>&nbsp;</span>";
          }
          ?>
        </a>
      </li>
    </ul>
  </div>
</nav>