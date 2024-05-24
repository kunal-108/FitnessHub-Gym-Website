<!-- Product Section Start -->

<?php
$item_id = $_GET['product_id'] ?? 1;
foreach ($product->getData() as $item):
    if ($item['product_id'] == $item_id):
        ?>
        <section id="product" class="py-3">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 py-5">
                        <img src="<?php echo ("./admin/assets/products/" . $item['product_image']) ?? "./admin/assets/products/1713006357.webp"; ?>"
                            alt="" class="img-fluid">
                        <div class="form-row pt-4 font-size-16 font-poppins d-flex">
                            <div class="col px-1">
                                <button type="submit" class="btn btn-danger form-control font-size-14">Proceed to Buy</button>
                            </div>
                            <div class="col px-1">
                                <?php
                                if (in_array($item['product_id'], $Cart_obj->getCartId($product->getData('cart')) ?? [])) {
                                    echo '<button type="submit" disabled
                                    class="btn btn-success font-size-14 form-control text-light">In the
                                    Cart</button>';
                                } else {
                                    echo '<button type="submit" name="top_sale_submit"
                                    class="btn btn-warning font-size-14 form-control text-light">Add to
                                    Cart</button>';
                                }
                                ?>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 py-5">
                        <h4 class="font-baloo">
                            <?php echo $item['product_name'] ?? "Unknown"; ?>
                        </h4>
                        <small>by
                            <?php echo $item['product_brand'] ?? "Brand"; ?>
                        </small>
                        <div class="d-flex">
                            <div class="rating text-warning font-size-14">
                                <span><i class="fa-solid fa-star"></i></span>
                                <span><i class="fa-solid fa-star"></i></span>
                                <span><i class="fa-solid fa-star"></i></span>
                                <span><i class="fa-solid fa-star"></i></span>
                                <span><i class="fa-regular fa-star"></i></span>
                            </div>
                            <a href="" class="px-2 font-poppins font-size-14 text-decoration-none">16,476 ratings |
                                1000+ answered
                                questions</a>
                        </div>
                        <hr class="m-1">

                        <!-- Product Price Start -->
                        <table class="my-3">
                            <tr class="font-rubik font-size-14">
                                <td>M.R.P.</td>
                                <td><strike><?php echo $item['product_price'] ?? 0; ?></strike></td>
                            </tr>
                            <tr class="font-rubik font-size-14">
                                <td>Deal Price :</td>
                                <td class="font-size-20 text-danger"> $<span>
                                        <?php echo $item['product_offer_price'] ?? 0; ?>
                                    </span><small class="text-dark font-size-14">&emsp;Inclusive of all
                                        taxes</small></td>
                            </tr>
                            <tr class="font-rubik font-size-14">
                                <td>You Save :</td>
                                <td><span
                                        class="font-size-16 text-danger">$<?php echo ($item['product_price'] - $item['product_offer_price']) ?? 0; ?></span>
                                </td>
                            </tr>
                        </table>
                        <!-- Product Price End -->

                        <!-- Policy Start -->
                        <div id="policy">
                            <div class="d-flex">
                                <div class="return text-center me-5">
                                    <div class="font-size-20 my-2 color-secondary">
                                        <span class="fa-solid fa-retweet border p-3 rounded-pill"></span>
                                    </div>
                                    <a href="" class="font-rubik font-size-12 text-decoration-none">10 Days
                                        <br>Replacement</a>
                                </div>
                                <div class="return text-center me-5">
                                    <div class="font-size-20 my-2 color-secondary">
                                        <span class="fa-solid fa-truck border p-3 rounded-pill"></span>
                                    </div>
                                    <a href="" class="font-rubik font-size-12 text-decoration-none">Gym Waale
                                        <br>Delivered</a>
                                </div>
                                <div class="return text-center me-5">
                                    <div class="font-size-20 my-2 color-secondary">
                                        <span class="fa-solid fa-check-double border p-3 rounded-pill"></span>
                                    </div>
                                    <a href="" class="font-rubik font-size-12 text-decoration-none">1 Year
                                        <br>Warranty</a>
                                </div>
                            </div>
                        </div>
                        <!-- Policy End -->
                        <hr>

                        <!-- Order Details Start -->
                        <div id="order-details font-rubik text-dark">
                            <small>Delivery by : May 25 - June 3</small>
                            <br>
                            <small>Sold by <a href="" class="text-decoration-none">GymWaale</a> (4.5 out of 5 | 15,378
                                ratings)</small>
                            <br>
                            <small><i class="fa-solid fa-location-dot color-primary"></i>&emsp;Deliver to Customer -
                                836284</small>
                        </div>
                        <!-- Order Details End -->

                        <div class="row mt-3">
                            <div class="col-6">
                                <!-- color -->
                                <div class="color">
                                    <div class="d-flex justify-content-between">
                                        <h6 class="font-baloo">Color: </h6>
                                        <div class="p-2 rounded-circle" style="background-color:#191970;"><button
                                                class="btn font-size-14"></button></div>
                                        <div class="p-2 rounded-circle" style="background-color:#900C3F;"><button
                                                class="btn font-size-14"></button></div>
                                        <div class="p-2 rounded-circle" style="background-color:#00665B;"><button
                                                class="btn font-size-14"></button></div>
                                    </div>
                                </div>
                                <!-- <table>
                                    <tr>
                                        <td class="text-black-50" style="width: 25%;">Model</td>
                                        <td style="width: 75%;">Premium Solid Rubber Hex (5Kg*2)</td>
                                    </tr>
                                    <tr>
                                        <td class="text-black-50" style="width: 25%;">Width</td>
                                        <td style="width: 75%;">5 Inch</td>
                                    </tr>
                                    <tr>
                                        <td class="text-black-50" style="width: 25%;">color</td>
                                        <td style="width: 75%;">Black</td>
                                    </tr>
                                </table> -->
                            </div>
                            <div class="col-6">
                                <div class="qty d-flex">
                                    <h6 class="font-baloo">Qty:</h6>
                                    <div class="px-4 d-flex font-rubik">
                                        <button class="qty-up border bg-light" data-id="pro1"><i
                                                class="fa-solid fa-angle-up"></i></button>
                                        <input type="text" data-id="pro1" class="qty-input border px-2 bg-light w-50" value="1"
                                            placeholder="1" disabled>
                                        <button data-id="pro1" class="qty-down border bg-light"><i
                                                class="fa-solid fa-angle-down"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="col-12 ">
                        <h5 class="font-baloo">Product Description</h5>
                        <hr>
                        <p class="font-poppins font-size-14" style="text-align: justify;">
                            <?php echo $item['product_small_description'] ?? "Unknown"; ?>
                        </p>
                        <p class="font-poppins font-size-14" style="text-align: justify;">
                            <?php echo $item['product_long_description'] ?? "Unknown"; ?>
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <?php
    endif;
endforeach;
?>

<!-- Product Section End -->