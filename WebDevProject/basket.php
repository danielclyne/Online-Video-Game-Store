<?php
session_start();
require_once('php/productsDB.php');
require_once('php/functions.php');

if (isset($_POST['remove'])) {
    if ($_GET['action'] == 'remove') {
        foreach ($_SESSION['basket'] as $key => $value) {
            if ($value['productId'] == $_GET['productId']) {
                unset($_SESSION['basket'][$key]);
                echo "<script>alert('Product has been removed!')</script>";
                echo "<script>window/location = 'basket.php'</script>";
            }
        }
    }
}
?>

<!doctype html>
<html lang="en">

<head>
    <?php require_once("headLinks.html"); ?>
    <link rel="stylesheet" href="style/basket.css">
    <title>Shopping Basket</title>
</head>

<body>
    <?php require_once("php/header.php"); ?>

    <div class="container-fluid">
        <div class="row px-5">
            <div class="col-md-7">
                <div class="shoppingBasket">
                    <h6>My Basket</h6>
                    <hr>
                    <?php
                    $total = 0;
                    if (isset($_SESSION['basket'])) {
                        $productId = array_column($_SESSION['basket'], 'productId');
                        $result = getData();
                        while ($row = mysqli_fetch_assoc($result)) {
                            foreach ($productId as $id) {
                                if ($row['productId'] == $id) {
                                    basketElement($row['productImage'], $row['productName'], $row['currentProductPrice'], $row['productId']);
                                    $total = $total + $row['currentProductPrice'];
                                }
                            }
                        }
                    } else {
                        echo "<h5>Basket currently empty!</h5>";
                    }
                    ?>
                </div>
            </div>
            <div class="col-md-4 offset-md-1 border rounded mt-5 bg-white h-25 pr-5">
                <div class="pt-4">
                    <h6>PRICE DETAILS</h6>
                    <hr>
                    <div class="row priceDetails">
                        <div class="col-md-6">
                            <?php
                            if (isset($_SESSION['basket'])) {
                                $count = count($_SESSION['basket']);
                                echo "<h6>Price($count items)</h6>";
                            } else {
                                echo "<h6>Price(0 items)</h6>";
                            }
                            ?>
                            <h6>Delivery Charges</h6>
                            <hr>
                            <h6>Amount Payable</h6>
                        </div>
                        <div class="col-md-6">
                            <h6>€<?php echo $total ?></h6>
                            <h6 class="text-success">FREE</h6>
                            <hr>
                            <h6>€<?php echo $total ?></h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

</body>

</html>