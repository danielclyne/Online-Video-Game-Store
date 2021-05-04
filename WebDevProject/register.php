<?php
session_start();
?>

<!doctype html>
<html lang="en">

<head>
    <?php require_once("headLinks.html"); ?>
    <title>Register</title>
</head>

<body>
    <?php require_once("php/header.php"); ?>

    <section>
        <h2>Sign Up</h2>
        <form action="php/registerInc.php" method="post">
            <input type="text" name="name" placeholder="Enter name...">
            <input type="text" name="email" placeholder="Enter email...">
            <input type="text" name="username" placeholder="Enter username...">
            <input type="password" name="pwd" placeholder="Enter password...">
            <input type="password" name="pwdRepeat" placeholder="Repeat password...">
            <button type="submit" name="submit">Register</button>
        </form>

        <?php
        if (isset($_GET["error"])) {
            if ($_GET["error"] == "emptyInput") {
                echo "<p>Fill in all fields!<p>";
            } else if ($_GET["error"] == "invalidUsername") {
                echo "<p>Choose a proper username!<p>";
            } else if ($_GET["error"] == "invalidEmail") {
                echo "<p>Choose a proper email!<p>";
            } else if ($_GET["error"] == "passwordMatchFalse") {
                echo "<p>Passwords don't match!<p>";
            } else if ($_GET["error"] == "usernameEmailTaken") {
                echo "<p>Username or email already taken!<p>";
            } else if ($_GET["error"] == "stmtFailed") {
                echo "<p>Something went wrong, try again<p>";
            } else if ($_GET["error"] == "none") {
                echo "<p>You have registered!<p>";
            }
        }
        ?>
    </section>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
</body>

</html>