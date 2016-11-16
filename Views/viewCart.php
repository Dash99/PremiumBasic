<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
include_once "../model/OrderCart.php";

session_start();
$designerID = $_SESSION["orderID"];

$cart = new OrderCart();

$result = $cart->getCartProducts($designerID);
$result2 = $cart->getCartTotalAmt($designerID);

//Display Results
include '../header.php';

   echo '<div align="right"> <br>';
while ($row = mysql_fetch_assoc($result)) {
 
    echo $row["description"].'. . . . . . . . . . . . . . . . '.$row["price"].  ' <a href="../Controller/remove.php?id='.$row["productID"].'" style="color:red;" > X </a></br>';
}

$row2 = mysql_fetch_assoc($result2);
$totalPrice = $row2["TotalPrice"];

$_SESSION["orderTotal"] = $totalPrice;

echo '__________________________<br>';
echo "<h4> Total Amount : R".$totalPrice."</h4> <br>";
if($totalPrice > 0){
echo '<a href="../Controller/addOrder.php"> Place Order -> </a>';
}
  echo '</div>';
  echo '<div align="left"> <a href="../Views/homepage.php"> <- Back (add to order) </a> </div>';
