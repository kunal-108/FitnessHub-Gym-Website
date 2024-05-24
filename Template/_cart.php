<!-- Shopping Cart Section Start -->

<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['delete-cart'])) {
        $deletedItem = $Cart_obj->deleteCart($_POST['item_id']);
    }

    //save for later
    if (isset($_POST['wishlist-submit'])) {
        $Cart_obj->saveForLater($_POST['item_id']);
    }
}
?>

<section id="cart" class="my-5 mx-auto" style="width: 95%;">
    <div class="container-fluid">
        <h4 class="font-baloo">Shopping Cart</h4>
        <!-- Shopping Cart Items Start-->
        <div class="row">
            <div class="col-sm-8 px-4">
                <?php
                foreach ($product->getData('cart') as $item):
                    $cart = $product->getProduct($item['product_id']);
                    $subTotal[] = array_map(function ($item) {
                        ?>
                        <!-- Cart Item -->
                        <div class="row border-top py-3 mt-3">
                            <div class="col-sm-2 text-center">
                                <img src="<?php echo ("./admin/assets/products/" . $item['product_image']) ?? "./admin/assets/products/1713006357.webp"; ?>"
                                    alt="" class="img-fluid" style="height: 100px;">
                            </div>
                            <div class="col-sm-8">
                                <h5 class="font-baloo font-size-20">
                                    <?php echo $item['product_name'] ?? "Unknown" ?>
                                </h5>
                                <small>by
                                    <?php echo $item['product_brand'] ?? "Brand" ?>
                                </small>

                                <!-- Product Rating Start -->
                                <div class="d-flex">
                                    <div class="rating text-warning font-size-14">
                                        <span><i class="fa-solid fa-star"></i></span>
                                        <span><i class="fa-solid fa-star"></i></span>
                                        <span><i class="fa-solid fa-star"></i></span>
                                        <span><i class="fa-solid fa-star"></i></span>
                                        <span><i class="fa-regular fa-star"></i></span>
                                    </div>
                                    <a href="" class="px-2 font-poppins font-size-14 text-decoration-none">20,328
                                        ratings</a>
                                </div>
                                <!-- Product Rating End -->

                                <!-- Product Qty Start -->
                                <div class="qty d-flex pt-2">
                                    <div class="d-flex font-poppins w-25">
                                        <button class="qty-up border bg-light"
                                            data-id="<?php echo $item['product_id'] ?? '0'; ?>"><i
                                                class="fa-solid fa-angle-up"></i></button>
                                        <input type="text" data-id="<?php echo $item['product_id'] ?? '0'; ?>"
                                            class="qty-input border px-2 bg-light w-100" value="1" placeholder="1" disabled>
                                        <button class="qty-down border bg-light"
                                            data-id="<?php echo $item['product_id'] ?? '0'; ?>"><i
                                                class="fa-solid fa-angle-down"></i></button>
                                    </div>
                                    <form method="post">
                                        <input type="hidden" value="<?php echo $item['product_id'] ?? 0; ?>" name="item_id">
                                        <button type="submit" name="delete-cart"
                                            class="btn font-baloo text-danger px-3 border-end">Delete</button>
                                    </form>

                                    <form method="post">
                                        <input type="hidden" value="<?php echo $item['product_id'] ?? 0; ?>" name="item_id">
                                        <button type="submit" name="wishlist-submit" class="btn font-baloo text-danger">Save for
                                            later</button>
                                    </form>
                                </div>
                                <!-- Product Qty End -->

                            </div>
                            <div class="col-sm-2 text-right">
                                <div class="font-size-18 font-baloo float-end">$<span class="product-price"
                                        data-id="<?php echo $item['product_id'] ?? '0'; ?>"><strike>
                                            <?php echo $item['product_price'] ?? 0 ?></strike>
                                    </span>
                                </div>
                                <div class="font-baloo text-danger float-end" style="font-size :28px;">$<span
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

            </div>

            <!-- Subtotal Section -->
            <div class="col-sm-4 px-5">
                <div class="sub-total shadow rounded border text-center mt-2">
                    <h6 class="font-size-12 font-poppins text-success py-3"><i class="fa-solid fa-check mx-1"></i>Your
                        order is eligible for FREE Delivery.</h6>
                    <div class="border-top py-4">
                        <h6 class="font-baloo font-size-20">Subtotal (
                            <?php echo isset($subTotal) ? count($subTotal) : 0 ?> item) :<br> <span class="text-danger"
                                style="font-size:30px;">$<span class="text-danger" id="deal-price">
                                    <?php echo isset($subTotal) ? $Cart_obj->getSum($subTotal) : 0 ?>
                                </span>
                        </h6>
                        <a href="checkout.php" class="btn btn-warning mt-3 font-size-14 text-light">Proceed
                            to
                            Checkout</a>
                    </div>
                </div>
            </div>
            <!-- Subtotal Section -->

        </div>
        <!-- Shopping Cart Items End-->
    </div>
</section>
<!-- Shopping Cart Section End -->