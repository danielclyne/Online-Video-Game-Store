<?php
session_start();
?>

<!doctype html>
<html lang="en">

<head>
    <?php require_once("headLinks.html"); ?>
    <title>Login</title>
</head>

<body>
    <?php require_once("php/header.php"); ?>

    <section>
        <h2>Login</h2>
        <div>
            <form action="php/loginInc.php" method="post">
                <input type="text" name="usernameOrEmail" placeholder="Enter username or email...">
                <input type="password" name="pwd" placeholder="Enter password...">
                <button type="submit" name="submit">Login</button>
            </form>
        </div>
        <?php
        if (isset($_GET["error"])) {
            if ($_GET["error"] == "emptyInput") {
                echo "<p>Fill in all fields!<p>";
            } else if ($_GET["error"] == "wrongUsernameEmail") {
                echo "<p>Wrong username or email!<p>";
            } else if ($_GET["error"] == "wrongPassword") {
                echo "<p>Wrong password!<p>";
            }
        }
        ?>
    </section>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
</body>

</html>