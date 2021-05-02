<?php
// start session
session_start();

require_once('php/retrieveDatabase.php');
require_once('php/component.php');

if (isset($_POST['addToBasket'])) {

    if (isset($_SESSION['basket'])) {

        $productArrayId = array_column($_SESSION['basket'], "productId");

        if (in_array($_POST['productId'], $productArrayId)) {
            echo "<script>alert('Product is already added to the basket!')</script>";
            echo "<script>window.location = 'products.php'</script>";
        } else {
            $count = count($_SESSION['basket']);

            $product_array = array(
                'productId' => $_POST['productId']
            );
            $_SESSION['basket'][$count] = $product_array;
        }
    } else {
        $product_array = array(
            'productId' => $_POST['productId']
        );
        // Create new session variable
        $_SESSION['basket'][0] = $product_array;
        print_r($_SESSION['basket']);
    }
}
?>

<!doctype html>
<html lang="en">

<head>
    <?php require_once("headLinks.html"); ?>
    <link rel="stylesheet" href="style/products.css">
    <title>Products</title>
</head>

<body>
    <?php require_once("php/header.php"); ?>

    <div class="container">
        <div class="row text-center py-5">
            <?php
            $result = getData();
            while ($row = mysqli_fetch_assoc($result)) {
                component($row['productImage'], $row['productName'], $row['productDescription'], $row['previousProductPrice'], $row['currentProductPrice'], $row['productId']);
            }
            ?>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
</body>

</html>