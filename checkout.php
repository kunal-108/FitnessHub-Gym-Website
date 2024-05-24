<?php
ob_start();
// include header.php file
include ('header.php');


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['placeOrderBtn'])) {
        $order_obj->orderData();
    }
}
?>

<section id="cart" class="my-5 mx-auto" style="width: 90%;">
    <div class="container-fluid">
        <!-- Shopping Cart Items Start-->
        <div class="card shadow">
            <div class="card-body">
                <form method="POST">
                    <div class="row">
                        <div class="col-sm-8">
                            <h5>Basic Details</h5>
                            <hr>

                            <div class="row ">
                                <div class="col-md-6 mb-4">
                                    <label class="font-size-16 font-poppins fw-bold mb-2">Name</label>
                                    <input type="text" name="name" required placeholder="Enter your full name"
                                        class="form-control">
                                </div>
                                <div class="col-md-6 mb-4">
                                    <label class="font-size-16 font-poppins fw-bold mb-2">Email</label>
                                    <input type="email" name="email" required placeholder="Enter your email"
                                        class="form-control">
                                </div>
                                <div class="col-md-6 mb-4">
                                    <label class="font-size-16 font-poppins fw-bold mb-2">Phone</label>
                                    <input type="text" name="phone" required placeholder="Enter your phone number"
                                        class="form-control">
                                </div>
                                <div class="col-md-6 mb-4">
                                    <label class="font-size-16 font-poppins fw-bold mb-2">Pin Code</label>
                                    <input type="text" name="pincode" required placeholder="Enter your pincode"
                                        class="form-control">
                                </div>
                                <div class="col-md-12 mb-4">
                                    <label class="font-size-16 font-poppins fw-bold mb-2">Address</label>
                                    <textarea name="address" required class="form-control" rows="5"></textarea>
                                </div>
                            </div>

                        </div>
                        <div class="col-sm-4">
                            <h5>Order Details</h5>
                            <hr>
                            <?php
                            foreach ($product->getData('cart') as $item):
                                $cart = $product->getProduct($item['product_id']);
                                $subTotal[] = array_map(function ($item) {
                                    ?>
                                    <!-- Cart Item -->
                                    <div class="row border py-3 my-2 mx-auto d-flex align-items-center">
                                        <div class="col-sm-4 text-center">
                                            <img src="<?php echo ("./admin/assets/products/" . $item['product_image']) ?? "./admin/assets/products/1713006357.webp"; ?>"
                                                alt="" class="img-fluid" style="height: 50px">
                                        </div>
                                        <div class="col-sm-4">
                                            <h5 class="font-baloo font-size-18">
                                                <?php echo $item['product_name'] ?? "Unknown" ?>
                                            </h5>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="font-baloo text-danger font-size-18 float-end">$<span
                                                    class="product-price" data-id="<?php echo $item['product_id'] ?? '0'; ?>">
                                                    <?php echo $item['product_offer_price'] ?? 0 ?>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Cart Item -->
                                    <?php
                                    return $item['product_offer_price'];
                                }, $cart); //closing array_map function
                            endforeach;
                            ?>
                            <hr class="my-3">
                            <h4 class="me-1 my-3 font-poppins">Total Price : <span
                                    class="float-end text-success">$<span><?= $Cart_obj->getSum($subTotal); ?></span></span>
                            </h4>
                            <div class="">

                                <button type="submit" name="placeOrderBtn"
                                    class="btn btn-primary w-100 font-poppins font-size-14">Confirm &
                                    Place Order |
                                    COD</button>
                            </div>

                        </div>
                    </div>
                </form>
            </div>
        </div>
        <!-- Shopping Cart Items End-->
    </div>
</section>


<?php
// include footer.php file
include ('footer.php');
?>