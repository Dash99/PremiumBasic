<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include_once "../model/Payment.php";

session_start();
$designerID = $_SESSION["orderID"];
$orderTotal = $_SESSION["orderTotal"];
$method = $_POST["txtMethod"];

$designer = new Product($designerID, $orderTotal, $method);

if ($designer->addNewPayment() === TRUE) {
    $_SESSION["orderID"]=0;
    include "../header.php";
    echo '<br>Thank You!!! Payment Made Successfully! <br><br>';
    
    $result = $designer->getPaymentInfo($designerID);
    $row = mysql_fetch_row($result);

    echo "Order Number : " . $row["1"] . "<br>";
    echo "Date : " . $row["2"] . "<br>";
    echo "Method : " . $row["3"] . "<br>";
    echo "Amount : R " . $row["4"] . "<br>";
    
    echo '<br><br><a href="../Views/homepage.php">  Proceed -></a></h4>';
    include "../footer.php";
} else {
    echo 'Payment not added';
}

