<?php
include('database.php');

$productId = $_POST['productId'];
$result = retrieveSingleProductDB($productId);

$json=json_encode($result);
echo $json;