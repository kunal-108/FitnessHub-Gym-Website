<!-- Special Price Start-->

<?php
$brand = array_map(function ($pro) {
    return $pro['product_brand'];
}, $product_shuffle);
$unique = array_unique($brand);
sort($unique);
shuffle($product_shuffle);

// request method post
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    if (isset($_POST['special_price_submit'])) {
        //call method addToCart
        $Cart_obj->addToCart($_POST['user_id'], $_POST['product_id']);
    }
}

$in_cart = $Cart_obj->getCartId($product->getData('cart'));
?>

<section id="special-price">
    <div class="container">
        <h4 class="font-baloo ">Special Price</h4>
        <hr />
        <div id="filters" class="button-group text-end font-baloo">
            <button class="btn is-checked" data-filter="*">All</button>
            <?php
            array_map(function ($brand) {
                printf('<button class="btn" data-filter=".%s">%s</button>', $brand, $brand);
            }, $unique);
            ?>
        </div>

        <div class="grid">
            <?php array_map(function ($item) use ($in_cart) { ?>
                <div class="grid-item border rounded-2 <?php echo $item['product_brand'] ?? "Brand"; ?>">
                    <div class="item py-2" style="width: 195px;">
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
                                        <?php echo $item['product_offer_price'] ?? "0"; ?>
                                    </span>
                                </div>
                                <form method="post">
                                    <input type="hidden" name="item_id" value="<?php echo $item['product_id'] ?? 1; ?>">
                                    <input type="hidden" name="user_id" value="<?php echo 1; ?>">
                                    <?php
                                    if (in_array($item['product_id'], $in_cart ?? [])) {
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
                </div>
            <?php }, $product_shuffle) ?>
        </div>
</section>
<!-- Special Price End -->