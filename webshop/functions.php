<?php

require ('database/DBController.php');
require ('database/Product.php');
require ('database/Cart.php');
$db = new DBController();
$product = new Product($db);

$cart = new Cart($db);
$arr = array(
    'user_id'=>1,
    'item_id'=>4,

);
$cart->insertCart($arr);
