<!-- Shopping Cart Section Start -->

<section id="cart" class="my-5 mx-auto" style="width: 90%;">
    <div class="container-fluid">
        <h4 class="font-baloo">Shopping Cart</h4>
        <!-- Shopping Cart Items Start-->
        <div class="row">
            <div class="col-sm-9">
                <!-- Empty Cart Start -->
                <div class="row border-top py-3 mt-3">
                    <div class="col-sm-12 text-center py-3">
                        <img src="./assets/blog/empty_cart.webp" alt="" class="img-fluid" style="height:200px;">
                        <p class="font-poppins font-size-18 text-black-50">Empty Cart</p>
                    </div>
                </div>
                <!-- Empty Cart End -->
            </div>

            <!-- Subtotal Section -->
            <div class="col-sm-3">
                <div class="sub-total border text-center mt-2">
                    <h6 class="font-size-12 font-poppins text-success py-3"><i class="fa-solid fa-check mx-1"></i>Your
                        order is eligible for FREE Delivery.</h6>
                    <div class="border-top py-4">
                        <h6 class="font-baloo font-size-18">Subtotal (
                            <?php echo isset ($subTotal) ? count($subTotal) : 0 ?> item) : <span
                                class="text-danger">$<span class="text-danger" id="deal-price">
                                    <?php echo isset ($subTotal) ? $Cart_obj->getSum($subTotal) : 0 ?>
                                </span>
                        </h6>
                        <button type="submit" class="btn btn-warning mt-3 font-size-14 text-light">Proceed to
                            Buy</button>
                    </div>
                </div>
            </div>
            <!-- Subtotal Section -->

        </div>
        <!-- Shopping Cart Items End-->
    </div>
</section>
<!-- Shopping Cart Section End -->