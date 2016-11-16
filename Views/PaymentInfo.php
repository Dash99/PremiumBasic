<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php 
session_start();
$designerID = $_SESSION["orderID"];
$amount = $_SESSION["orderTotal"];

?>
<html>
    <head>
        <meta charset="UTF-8">
        <link type="text/css" href="css/myStyle.css" rel="stylesheet">
        <link href="css/myStyle2.css" rel="stylesheet" media="screen and (max-width: 800px)">
        <title> Premium Fragrance Boutique </title>
    </head>
    <body>

        <div id="container">

            <div id="header">  
            </div>
            
            <h3>BOUTIQUE</h3>
            
            <div id="leftPane" align="center"
                <h3>BOUTIQUE</h3>
                <div class="navigate"> <a href="homepage.php">Home</a></div> 
                <div class="navigate"><a href="myCart.php">My Orders </a></div> 
                <div class="navigate"><a href="myProfile.php">My Profile </a></div>  
                <div class="navigate"><a href="aboutUs.php">About Us </a></div> 
                <div class="navigate"><a href="../index.php">Logout </a></div> 
            </div>
            
            <div id="reportView" align="center"> 
                <form class="formHome" method="POST" action="../Controller/addPayment.php">
                    <h3> ORDER PAYMENT</h3>
                    Order# <br> <input type="text" name="txtOrderID" class="formHome" value="<?php echo $designerID; ?>"> <br>
                    Date <br> <input type="text" name="txtDate" class="formHome" value="<?php echo date("Y-m-d"); ?>"> <br>
                    Amount <br> <input type="text" name="txtAmount" class="formHome" value="<?php echo $amount; ?>"> <br><br>
                    Select Pay Method  <br> 
                    EFT<input type="radio" name="txtMethod" class="formHome" value="EFT" checked> <br>
                    Master Card - Debit<input type="radio" name="txtMethod" class="formHome" value="Master Card - Debit"> <br><br>
                    Card No <br>  <input type="text" name="txtCardNo" class="formHome"> <br>
                    CVV No <br>  <input type="text" name="txtCvvNo" class="formHome"> <br>
                    <br> <input type="submit" value="Pay Now" class="formHome">
                </form>  <br>
            </div>
            
            <div id="footer"> </div>

        </div>

    </body>
</html>
