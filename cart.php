<?php
ob_start();
// include header.php file
include ('header.php');
?>

<?php
// include _cart.php file
// include cart items if it is not empty
count($product->getData('cart')) ? include ('./Template/_cart.php') : include ('./Template/notFound/_cart_notFound.php');

// include _wishlist.php file
count($product->getData('wishlist')) ? include ('./Template/_wishlist.php') : include ('./Template/notFound/_wishlist_notFound.php');

// include new_equipment.php file
include ('./Template/_new_equipment.php');
?>

<?php
// include footer.php file
include ('footer.php');
?>