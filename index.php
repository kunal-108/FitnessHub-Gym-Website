<?php
ob_start();
// include header.php file
include ('header.php');
?>

<?php
// include banner_area.php file
include ('./Template/_banner_area.php');

// include top_sale.php file
include ('./Template/_top_sale.php');

// include special_price.php file
include ('./Template/_special_price.php');

// include banner_ads.php file
include ('./Template/_banner_ads.php');

// include new_equipment.php file
include ('./Template/_new_equipment.php');

// include blog.php file
include ('./Template/_blog.php');
?>

<?php
// include footer.php file
include ('footer.php');
?>