<?php
ob_start();
// header 
include('header.php');
?>
<?php

// include('./template/_cart.php')
count($product->getData('cart'))?include('./template/_cart.php'):include('./template/not-found/_cart-not-found.php');
?>


<?php

count($product->getData('wishlist'))?include('./template/_wishlist.php'):include('./template/_wishlist.php');


?>

<?php
// header 
include('./template/_sale.php');
?>
 <?php
        include('footer.php');
        ?>

        