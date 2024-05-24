<!-- New Phone Section Start -->
<?php
shuffle($product_shuffle);

// request method post
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    if (isset($_POST['new_equipment_submit'])) {
        //call method addToCart
        $Cart_obj->addToCart($_POST['user_id'], $_POST['product_id']);
    }
}
?>

<section id="new-equipments">
    <div class="container">
        <h4 class="font-baloo ">New Equipments</h4>
        <hr />
        <!-- Owl Carousel Start -->
        <div class="owl-carousel owl-theme">
            <?php foreach ($product_shuffle as $item) { ?>
                <div class="item py-2 bg-light">
                    <div class="product font-poppins">
                        <a href="<?php printf('%s?product_id=%s', 'product.php', $item['product_id']); ?>"><img
                                src="<?php echo ("./admin/assets/products/" . $item['product_image']) ?? "./admin/assets/products/1713006357.webp"; ?>"
                                class="img-fluid text-center" alt="" /></a>
                        <div class="text-center">
                            <h6>
                                <?php echo $item['product_name'] ?? "Unknown"; ?>
                            </h6>
                            <div class="rating text-warning font-size-12">
                                <span><i class="fa-solid fa-star"></i></span>
                                <span><i class="fa-solid fa-star"></i></span>
                                <span><i class="fa-solid fa-star"></i></span>
                                <span><i class="fa-solid fa-star"></i></span>
                                <span><i class="fa-regular fa-star"></i></span>
                            </div>
                            <div class="price py-2">
                                <span class="font-size-16">$
                                    <?php echo $item['product_offer_price'] ?? "0" ?>
                                </span>
                            </div>
                            <form method="post">
                                <input type="hidden" name="item_id" value="<?php echo $item['product_id'] ?? 1; ?>">
                                <input type="hidden" name="user_id" value="<?php echo 1; ?>">
                                <?php
                                if (in_array($item['product_id'], $Cart_obj->getCartId($product->getData('cart')) ?? [])) {
                                    echo '<button type="submit" disabled
                                    class="btn btn-success font-size-12 text-light">In the
                                    Cart</button>';
                                } else {
                                    echo '<button type="submit" name="top_sale_submit"
                                    class="btn btn-warning font-size-12 text-light">Add to
                                    Cart</button>';
                                }
                                ?>
                            </form>
                        </div>
                    </div>
                </div>
            <?php } // closing foreach loop
            ?>
        </div>
        <!-- Owl Carousel End -->
    </div>
</section>
<!-- New Phone Section End -->