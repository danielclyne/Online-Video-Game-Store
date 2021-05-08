<?php

if (isset($_POST['submit'])) {

    $name = $_POST['name'];
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = $_POST['pwd'];
    $passwordRepeat = $_POST['pwdRepeat'];

    require_once("database.php");
    require_once("functions.php");

    $connection = connectToDB();

    if (emptyInputRegister($name, $email, $username, $password, $passwordRepeat) !== false) {
        header("location: ../register.php?error=emptyInput");
        exit();
    }
    if (invalidUsername($name) !== false) {
        header("location: ../register.php?error=invalidUsername");
        exit();
    }
    if (invalidEmail($email) !== false) {
        header("location: ../register.php?error=invalidEmail");
        exit();
    }
    if (passwordMatch($password, $passwordRepeat) !== false) {
        header("location: ../register.php?error=passwordMatchFalse");
        exit();
    }
    if (usernameEmailExists($connection, $username, $email) !== false) {
        header("location: ../register.php?error=usernameEmailTaken");
        exit();
    }
    createUser($connection, $name, $email, $username, $password, $passwordRepeat);
} else {
    header("location: ../register.php");
    exit();
}
