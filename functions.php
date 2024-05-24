<?php
// require MySQL Connection
require ('database/DBController.php');

// require Product Class
require ('database/Product.php');

// require Cart Class
require ('database/Cart.php');

// require Cart Class
require ('database/Order.php');

// require Cart Class
require ('database/Contact.php');

// DBController object
$db = new DBController();

// Product object
$product = new Product($db);
$product_shuffle = $product->getData();

// Cart object
$Cart_obj = new Cart($db);

// Order object
$order_obj = new Order($db);

// Contact object
$contact_obj = new Contact($db);


