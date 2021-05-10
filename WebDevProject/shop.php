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
            <div class="modal-content modalColour">
                <div class="modal-header">
                    <h4 class="modal-title" id="modalLabel"></h4>
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                </div>
                <div class="modal-body">
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe id="modalProductTrailer" class="embed-responsive-item" width="560" height="315" src="" allowfullscreen></iframe>
                    </div>

                </div>
                <div>
                    <p class="pl-4" id="modalStarRating"></p>
                    <p class="pl-4" id="modalNumPlayers"></p>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

    <script>
        $('.card').tooltip({
            boundary: 'window'
        })

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
            document.getElementById("modalLabel").innerText = data.productName;
            document.getElementById("modalStarRating").innerHTML = "Star Rating: " + data.starRating;
            document.getElementById("modalNumPlayers").innerHTML = "No. of Players: " + data.numPlayers;
            if (data.productTrailer) {
                document.getElementById("modalProductTrailer").style.display = "block";
                document.getElementById("modalProductTrailer").src = data.productTrailer;
            } else {
                document.getElementById("modalProductTrailer").style.display = "none";
            }
            setTimeout(function() {
                $('#productModal').modal('show');
            }, 300);
            $("#productModal").on('hidden.bs.modal', function(e) {
                $("#productModal iframe").attr(document.getElementById("modalProductTrailer").src = data.productTrailer,
                    $("#productModal iframe").attr(document.getElementById("modalProductTrailer").src = data.productTrailer));
            });
        }
    </script>

</body>

</html>