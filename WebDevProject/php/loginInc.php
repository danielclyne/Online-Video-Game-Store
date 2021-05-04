<?php

if (isset($_POST['submit'])) {

    $usernameOrEmail = $_POST['usernameOrEmail'];
    $password = $_POST['pwd'];

    require_once("usersDB.php");
    require_once("functions.php");

    if (emptyInputLogin($usernameOrEmail, $password) !== false) {
        header("location: ../login.php?error=emptyInput");
        exit();
    }

    loginUser($connection, $usernameOrEmail, $password);
} else {
    header("location: ../login.php");
    exit();
}
