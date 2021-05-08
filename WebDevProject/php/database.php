<?php

function connectToDB()
{
    //Create a database connection
    $dbhost = "localhost";
    $dbuser = "root";
    $dbpassword = "";
    $dbname = "g00249137";

    $connection = mysqli_connect($dbhost, $dbuser, $dbpassword, $dbname);

    //Test if connection occoured
    if (mysqli_connect_errno()) {
        die("DB connection failed: " .
            mysqli_connect_error() .
            " (" . mysqli_connect_errno() . ")");
    }

    if (!$connection) {
        die('Could not connect: ' . mysqli_error());
    } else {
        return $connection;
    }
}

function retrieveProductsDB()
{
    $connection = connectToDB();

    //Save the Query
    $sql = "SELECT * FROM products;";


    //Query Database
    $result = mysqli_query($connection, $sql);

    if (mysqli_num_rows($result) > 0) {
        return $result;
    }
}

function retrieveSingleProductDB($productId)
{
    $connection = connectToDB();

    //Save the Query
    $sql = "SELECT * FROM products WHERE productId = $productId LIMIT 1;";



    //Query Database
    $result = mysqli_query($connection, $sql);

    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        return $row;
    }
}