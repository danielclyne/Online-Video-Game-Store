<?php

function getData(){

//Create a database connection
$dbhost = "localhost";
$dbuser = "root";
$dbpassword = "";
$dbname = "productsDatabase";

$connection = mysqli_connect($dbhost,$dbuser,$dbpassword,$dbname);

//Test if connection occoured
if(mysqli_connect_errno()){
    die("DB connection failed: " .
        mysqli_connect_error() .
            " (" . mysqli_connect_errno() . ")"
            );
}

if (!$connection)
    {
        die('Could not connect: ' . mysqli_error());
    }

//Save the Query
    $sql = "SELECT * FROM products;";
 
 
//Query Database
    $result = mysqli_query($connection, $sql);

    if(mysqli_num_rows($result)>0){
        return $result;
    }
}
?>