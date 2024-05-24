<?php
ob_start();
// include header.php file
include ('header.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['messageBtn'])) {
        $contact_obj->contactData();
    }
}
?>

<section id="cart" class="my-5 mx-auto" style="width: 95%;">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-5 px-4">
                <h4 class="font-baloo">Contact Us</h4>
                <hr>
                <p class="font-poppins font-size-14 my-3">Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                    Debitis
                    neque illo
                    reprehenderit at sit
                    quod officia ipsam perspiciatis ullam a ipsum quidem, aperiam, iusto id nam, vitae facere quo cum!
                </p>
                <div class="row mt-4">
                    <div class="col-md-12 my-2 py-2 shadow-lg rounded">
                        <div class="row">
                            <div
                                class="col-md-2 font-size-20 text-warning d-flex align-items-center justify-content-center">
                                <i class="fa-solid fa-location-dot"></i>
                            </div>
                            <div class="col-md-9">
                                <div class="font-size-14 text-secondary">Address:</div>
                                <div>Cannaught Palace, New Delhi - 110072</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 my-2 py-2 shadow-lg rounded">
                        <div class="row">
                            <div
                                class="col-md-2 font-size-20 text-warning d-flex align-items-center justify-content-center">
                                <i class="fa-solid fa-phone"></i>
                            </div>
                            <div class="col-md-9">
                                <div class="font-size-14 text-secondary">Phone:</div>
                                <div>+011 1823 3847</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 my-2 py-2 shadow-lg rounded">
                        <div class="row">
                            <div
                                class="col-md-2 font-size-20 text-warning d-flex align-items-center justify-content-center">
                                <i class="fa-solid fa-envelope"></i>
                            </div>
                            <div class="col-md-9">
                                <div class="font-size-14 text-secondary">Email:</div>
                                <div>fitnesshub123@gmail.com</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-7 px-4">
                <h4 class="font-baloo">Leave a Comment !</h4>
                <hr>
                <p class="font-poppins font-size-14 my-3">Our staff call back later and answer your question as soon as
                    possible !
                </p>
                <form action="" class="my-3 shadow-lg mt-5 rounded p-4" method="POST">
                    <div class="row">
                        <div class="col-md-6 mb-4">
                            <input type="text" name="name" required placeholder="Your Name" class="form-control">
                        </div>
                        <div class="col-md-6 mb-4">
                            <input type="email" name="email" required placeholder="Your Email" class="form-control">
                        </div>

                        <div class="col-md-12 mb-4">
                            <textarea name="message" required class="form-control" rows="5"
                                placeholder="Your Message"></textarea>
                        </div>
                    </div>
                    <button type="submit" name="messageBtn"
                        class="btn btn-warning form-control text-white font-poppins w-50">Send Message</button>
                </form>
            </div>
        </div>
    </div>
</section>


<?php
// include footer.php file
include ('footer.php');
?>