<?php

require('../database/DBController.php');
$db=new DBController();
require ('../database/Product.php');
$product = new Product($db);
if(isset($_POST['item_id'])){
 
$result = $product->getProduct($_POST['item_id']);
 
echo json_encode($result);
}