<?php

session_start();
$productID = $_GET["id"];
$orderID = $_SESSION["orderID"];

include '../Model/ordercart.php';

$cart = new OrderCart();

if($cart->removeItem($productID, $orderID)){
    include '../header.php';
    echo 'Item Successfully removed <br>';
    echo '<a href="../views/viewCart.php" > view cart -> </a>';
    include '../footer.php';
}
