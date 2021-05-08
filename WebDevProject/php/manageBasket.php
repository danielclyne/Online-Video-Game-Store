<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (isset($_POST['addToBasket'])) {

        if (isset($_SESSION['basket'])) {
            $myProducts = array_column($_SESSION['basket'], 'productName');
            if (in_array($_POST['productName'], $myProducts)) {
                echo "<script>
                    alert('Item already Added');
                    window.location.href='../shop.php';
                    </script>";
            } else {
                $count = count($_SESSION['basket']);
                $_SESSION['basket'][$count] = array('productImage' => $_POST['productImage'], 'productName' => $_POST['productName'], 'productPrice' => $_POST['productPrice'], 'quantity' => 1);
                echo "<script>
            alert('Item Added');
            window.location.href='../shop.php';
            </script>";
            }
        } else {
            $_SESSION['basket'][0] = array('productImage' => $_POST['productImage'], 'productName' => $_POST['productName'], 'productPrice' => $_POST['productPrice'], 'quantity' => 1);
            echo "<script>
            alert('Item Added');
            window.location.href='../shop.php';
            </script>";
        }
    }

    if (isset($_POST['removeProduct'])) {

        foreach ($_SESSION['basket'] as $key => $value) {
            if ($value['productName'] == $_POST['productName']) {
                unset($_SESSION['basket'][$key]);
                $_SESSION['basket'] = array_values($_SESSION['basket']);
                echo "<script>
                    alert('Item Removed');
                    window.location.href='../basket.php';
                    </script>";
            }
        }
    }
}
