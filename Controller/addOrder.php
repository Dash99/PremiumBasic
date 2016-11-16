<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include_once "../model/Order.php";

session_start();
$designerID = $_SESSION["orderID"];
$userID = $_SESSION["userID"];
$orderTotal = $_SESSION["orderTotal"];

$designer = new Designer($designerID, $userID, $orderTotal);

if($designer->addNewOrder()== TRUE){
     //DISPLAY ORDER REPORT
    include "../header.php";
    echo 'Order Placed Successfully! <br><br>'; 
    echo '<h4>OrderID : '.$designerID;
    echo '<br>CustomerID : '.$userID; 
    echo '<br>Order Total Amount : '.$orderTotal;
    echo '<br><br><a href="../Views/PaymentInfo.php">  Proceed to Payment -></a></h4>';
    include "../footer.php";
}



