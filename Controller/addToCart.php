<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include_once "../model/OrderCart.php";

$prodID = trim($_GET["pid"]);

$cart = new OrderCart();

session_start();
if ($_SESSION["orderID"] != NULL) {
    $designerID = $_SESSION["orderID"];
    $cart->setProductID($prodID);
    $cart->setOrderID($designerID);
    $cart->addOrderCart();

    //DISPLAY
    include "../header.php";
    echo '<br><img src="../Views/img/cart.jpg" width="300" height="300"> <br>';
    echo '<a href="../views/viewCart.php"> View My Cart >>></a> <br>';
    include "../footer.php";
    
} else {
    $cart->setProductID($prodID);
    $randID = $cart->getRandID();

    while ($cart->isOrderID($randID) === TRUE) {
        $randID = $cart->getRandID();
    }

    $_SESSION["orderID"] = $randID;
    $cart->setProductID($prodID);
    $cart->setOrderID($randID);
    $cart->addOrderCart();
}



