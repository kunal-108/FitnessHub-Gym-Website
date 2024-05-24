<!-- Shopping Cart Section Start -->

<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['delete-cart'])) {
        $deletedItem = $Cart_obj->deleteWishlist($_POST['item_id']);
    }
    if (isset($_POST['cart-submit'])) {
        $Cart_obj->saveForLater($_POST['item_id'], saveTable: 'cart', fromTable: 'wishlist');
    }
}
?>

<section id="wishlist" class="my-5 mx-auto" style="width: 90%;">
    <div class="container-fluid">
        <h4 class="font-baloo">Wishlist</h4>
        <!-- Shopping Cart Items Start-->
        <div class="row">
            <div class="col-sm-9">
                <?php
                foreach ($product->getData('wishlist') as $item):
                    $cart = $product->getProduct($item['product_id']);
                    $subTotal[] = array_map(function ($item) {
                        ?>
                        <!-- Cart Item -->
                        <div class="row border-top py-3 mt-3">
                            <div class="col-sm-2">
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
                                    <form method="post">
                                        <input type="hidden" value="<?php echo $item['product_id'] ?? 0; ?>" name="item_id">
                                        <button type="submit" name="delete-cart"
                                            class="btn font-baloo text-danger ps-0 pe-3 border-end">Delete</button>
                                    </form>
                                    <form method="post">
                                        <input type="hidden" value="<?php echo $item['product_id'] ?? 0; ?>" name="item_id">
                                        <button type="submit" name="cart-submit" class="btn font-baloo text-danger">Add to
                                            Cart</button>
                                    </form>

                                </div>
                                <!-- Product Qty End -->

                            </div>
                            <div class="col-sm-2 text-right">
                                <div class="font-size-18 font-baloo">$<span class="product-price"
                                        data-id="<?php echo $item['product_id'] ?? '0'; ?>"><strike>
                                            <?php echo $item['product_price'] ?? 0 ?></strike>
                                    </span>
                                </div>
                                <div class="font-baloo text-danger" style="font-size :27px;">$<span class="product-price"
                                        data-id="<?php echo $item['product_id'] ?? '0'; ?>">
                                        <?php echo $item['product_offer_price'] ?? 0 ?>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <!-- Cart Item -->
                        <?php
                        return $item['product_price'];
                    }, $cart); //closing array_map function
                endforeach;
                ?>

            </div>
        </div>
        <!-- Shopping Cart Items End-->
    </div>
</section>
<!-- Shopping Cart Section End -->