<!doctype html>
<html lang="en">

<head>
    <?php include("headLinks.html"); ?>
    <link rel="stylesheet" href="style/shop.css">
    <title>Shop</title>
</head>

<body>
    <?php
    include("navbar.php");
    include('php/database.php');
    include('php/functions.php');
    ?>

    <div class="container">
        <div class="row">
            <?php
            $result = retrieveProductsDB();
            while ($row = mysqli_fetch_assoc($result)) {
                productsCard($row["productImage"], $row["productName"], $row["productDescription"], $row["productPreviousPrice"], $row["productCurrentPrice"], $row["productId"]);
            }
            ?>
        </div>
    </div>

    <div class="modal fade" id="productModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <iframe id="modalProductTrailer" width="560" height="315" src="" title="Product Trailer" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

    <script>
        function getProductInfo(productId) {
            $.ajax({
                type: "POST",
                url: "php/productInfoModal.php",
                data: "productId=" + productId,
                dataType: 'json',
                success: function(data) {
                    populatProductInfoModal(data);
                }
            });
        }

        function populatProductInfoModal(data) {

            if (data.productTrailer) {
                document.getElementById("modalProductTrailer").style.display = "block";
                document.getElementById("modalProductTrailer").src = data.productTrailer;
            } else {
                document.getElementById("modalProductTrailer").style.display = "none";
            }
            setTimeout(function() {
                $('#productModal').modal('show');
            }, 300);
        }
    </script>

</body>

</html>