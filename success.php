<?php
ob_start();
// include header.php file
include ('header.php');
?>

<section id="cart" class="my-5 mx-auto" style="width: 90%;">
    <div class="container-fluid">
        <div class="row d-flex justify-content-center">
            <div class="col-md-6">
                <img src="./assets/success.jpg" class="img-fluid" alt="">
            </div>
            <div class="col-md-12">
                <h1 class="text-center font-baloo">Your order has been confirmed <span
                        class="text-success fw-bold">Successfully</span>...
                </h1>
            </div>
            <div class="col-md-6 text-center my-3 mt-5">
                <a href="index.php" class="btn btn-primary">Back to Shopping</a>
            </div>
        </div>
    </div>
</section>

<?php
// include footer.php file
include ('footer.php');
?>