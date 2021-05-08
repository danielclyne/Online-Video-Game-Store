<!doctype html>
<html lang="en">

<head>
    <?php include("headLinks.html"); ?>
    <link rel="stylesheet" href="style/basket.css">
    <title>Shopping Basket</title>
</head>

<body>
    <?php include("navbar.php"); ?>

    <div class="container">
        <div class="row my-3">
            <div class="col-md-12 text-center">
                <h2>My Shopping Basket</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-7">
                <?php
                if (isset($_SESSION['basket'])) {
                    foreach ($_SESSION['basket'] as $key => $value) {
                        echo "<div class='border rounded my-1'>
                                     <div class='row bg-white'>
                                         <div class='col-md-3'>
                                                 <img src='$value[productImage]' alt='Product Image' class='img-fluid my-1'>
                                             </div>
                                                <div class='col-md-5 my-3 text-center'>
                                                    <h5>$value[productName]</h5>
                                                    <h5>€$value[productPrice]<input type='hidden' class='singleProdPrice' value='$value[productPrice]'></h5>
                                                    <form action='php/manageBasket.php' method='POST'>
                                                    <button name ='removeProduct' class='btn btn-sm btn-outline-danger'>REMOVE</button>
                                                     <input type='hidden' name='productName' value='$value[productName]'>
                                                    </form>
                                                </div>
                                                    <div class='col-md-4 my-1 text-center'>
                                                        <h3><input class='productQty text-center my-3' onchange='subTotal()' type='number' value='$value[quantity]' min='1' style='width: 80px'></h3>
                                                        <h3 class='productTotal'></h3>
                                                    </div>
                                    </div>
                            </div>
                         ";
                    }
                }
                ?>
            </div>
            <div class="col-md-4 offset-md-1 border rounded bg-white h-25">
                <div class="row">
                    <div class="col-md-12 my-2">
                        <h4>Order Details:</h4>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <h6>Grand Total:</h6>
                        <h6>Delivery:</h6>

                    </div>
                    <div class="col-md-6">
                    <h6 class="text-success">FREE</h6>
                        <h5 id="grandTotal"></h5>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <form>
                            <button class="btn btn-primary btn-block my-2">Make Purchase</button>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <script>
        var grandTotal = 0;
        var singleProdPrice = document.getElementsByClassName('singleProdPrice');
        var productQty = document.getElementsByClassName('productQty');
        var productTotal = document.getElementsByClassName('productTotal');
        var gTotal = document.getElementById('grandTotal');

        function subTotal() {
            grandTotal = 0;
            for (i = 0; i < singleProdPrice.length; i++) {
                productTotal[i].innerText = "€" + (singleProdPrice[i].value) * (productQty[i].value);

                grandTotal = grandTotal + (singleProdPrice[i].value) * (productQty[i].value);
            }
            gTotal.innerText = "€" + grandTotal;
        }
        subTotal();
    </script>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

</body>

</html>