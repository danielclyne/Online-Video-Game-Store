<?php
function component($productImage, $productName, $productDescription, $previousProductPrice, $currentProductPrice, $productId)
{
    $element = "
<div class='col-md-3 col-sm-6 my-3-md-0'>
                <form action='products.php' method='post'>
                    <div class='card shadow'>
                        <div>
                            <img src='$productImage' alt='Product Image' class='img-fluid card-img-top cardImageStyle'>
                        </div>
                        <div class='card-body'>
                            <h5 class='card-title'>$productName</h5>
                            <h6>
                                <i class='fas fa-star'></i>
                                <i class='fas fa-star'></i>
                                <i class='fas fa-star'></i>
                                <i class='fas fa-star'></i>
                                <i class='far fa-star'></i>
                            </h6>
                            <p class='card-text'>$productDescription</p>
                            <h5>
                                <small><s class='text-secondary'>€$previousProductPrice</s></small>
                                <span class='price'>€$currentProductPrice</span>
                            </h5>
                            <button type='submit' class='btn btn-warning my-3' name='addToBasket'>Add to Basket <i class='fas fa-shopping-basket'></i>
                            </button>
                            <input type='hidden' name='productId' value='$productId'>
                        </div>
                    </div>
                </form>
            </div>
";
    echo $element;
}
