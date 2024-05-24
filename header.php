<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>FitnessHub - Gym Products</title>
    <!-- Bootstrap CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />

    <!-- Owl Carousel CDN -->
    <link rel="stylesheet" href="./OwlCarousel2-2.3.4/dist/assets/owl.carousel.min.css" />
    <link rel="stylesheet" href="./OwlCarousel2-2.3.4/dist/assets/owl.theme.default.min.css" />

    <!-- Font Awesome Icons-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Custom CSS -->
    <link rel="stylesheet" href="style.css" />

    <?php
    // require functions.php file
    require ('functions.php');

    ?>

</head>

<body>
    <!-- start header -->
    <header id="header">
        <div class="strip d-flex justify-content-between px-4 py-1 bg-light">
            <p class="font-rubik font-size-14 text-black-50 m-0">
                Cannaught Palace, New Delhi - 110072&emsp;|&emsp;+011 1823 3847
            </p>
            <div class="font-rubik font-size-14">
                <a href="./admin/login.php"
                    class="px-3 border-end border-start text-dark text-decoration-none">Login</a>
                <a href="cart.php #wishlist" class="px-3 border-end text-dark text-decoration-none">Wishlist</a>
            </div>
        </div>

        <!-- Primary Navigation Start -->
        <nav class="navbar navbar-expand-lg navbar-dark color-secondary-bg">
            <div class="container-fluid">
                <a class="navbar-brand d-flex align-items-center font-baloo" style="font-size: 1.5rem;font-weight: 600;"
                    href="index.php"><i class="fa-solid fa-dumbbell px-1"
                        style="transform: rotate(145deg)"></i>FitnessHub</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav m-auto font-poppins font-size-14">
                        <li class="nav-item">
                            <a class="nav-link" href="index.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="about.php">About us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="index.php #top-sale">Products</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="index.php #blogs">Blog</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="index.php #special-price">Categories</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="contact.php">Contact</a>
                        </li>
                    </ul>
                    <form action="#" class="font-size-14 font-rubik">
                        <a href="cart.php" class="py-2 rounded-pill color-primary-bg text-decoration-none">
                            <span class="font-size-14 px-2 text-white"><i class="fas fa-shopping-cart"></i></span>
                            <span class="font-size-14 px-3 py-2 rounded-pill text-dark bg-light ">
                                <?php echo count($product->getData('cart')); ?>
                            </span></a>
                    </form>
                </div>
            </div>
        </nav>
        <!-- Primary Navigation End -->
    </header>
    <!-- end header -->


    <!-- start main-site -->
    <main id="main-site">