<!DOCTYPE html>
<?php

// Generate Random ID
function getRandID() {
    $orderID = date('m') . rand(100, 999) . date('d') . rand(100, 999);
    return $orderID;
}
?>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
session_start();
if ($_SESSION["orderID"] == 0) {
    $_SESSION["orderID"] = getRandID();
} else {
    $userID = $_SESSION["userID"];
}
?>

<html>
    <head>
        <meta charset="UTF-8">
        <link type="text/css" href="css/myStyle.css" rel="stylesheet">
        <link href="css/myStyle2.css" rel="stylesheet" media="screen and (max-width: 800px)">
        <title> Premium Fragrance Boutique </title>
    </head>
    <body>

        <div id="container" align="middle">

            <div id="header" style="color: white;">  
            <br>
               &nbsp; &nbsp; &nbsp; &nbsp; P R E M I U M
            </div>
            
            <div id="leftPane" align="center" style="background-image: none;">
                <div class="navigate"> <br><a href="viewCart.php">My Cart</a><br></div> 
                <div class="navigate"><br><a href="viewCustomer.php">My Profile </a><br></div> 
                <div class="navigate"><br><a href="aboutUs.php">About Us </a><br></div> 
                <div class="navigate"><br><a href="../Controller/logout.php">Logout </a><br></div>
                <div class="navigate"><br><br></div> 
                <div class="navigate"><br><br></div> 
            </div>

            <div id="middlePane" align="center">
                <div class="thumbnail"><a href="DesignerProducts.php?id=40000"><img src="img/designers/img1.jpg"></a></div>
                <div class="thumbnail"><a href="DesignerProducts.php?id=40015"><img src="img/designers/img2.jpg"></a></div>
                <div class="thumbnail"><a href="DesignerProducts.php?id=40007"><img src="img/designers/img3.jpg"></a></div>
                <div class="thumbnail"><a href="DesignerProducts.php?id=40010"><img src="img/designers/img4.jpg"></a></div>
                <div class="thumbnail"><a href="DesignerProducts.php?id=40003"><img src="img/designers/img5.jpg"></a></div>
                <div class="thumbnail"><a href="DesignerProducts.php?id=40008"><img src="img/designers/img6.jpg"></a></div> 
            </div>

            <div id="rightPane" align="center"> 
                <div class="thumbnail"><a href="DesignerProducts.php?id=40020"><img src="img/designers/img7.jpg"></a></div>
                <div class="thumbnail"><a href="DesignerProducts.php?id=40001"><img src="img/designers/img8.jpg"></a></div>
                <div class="thumbnail"><a href="DesignerProducts.php?id=58001"><img src="img/designers/img9.jpg"></a></div>
                <div class="thumbnail"><a href="DesignerProducts.php?id=52001"><img src="img/designers/img10.jpg"></a></div>
                <div class="thumbnail"><a href="DesignerProducts.php?id=53001"><img src="img/designers/img11.jpg"></a></div>
                <div class="thumbnail"><a href="DesignerProducts.php?id=54001"><img src="img/designers/img12.jpg"></a></div>
            </div>
            <div id="footer"> </div>

        </div>

    </body>
</html>
