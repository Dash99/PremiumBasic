<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
include '../Model/Payment.php';

$designer = new Product("","","");

$results = $designer->getAllPayments();
?>


<html>
    <head>
        <meta charset="UTF-8">
        <link type="text/css" href="../Views/css/myStyle.css" rel="stylesheet">
        <title> Premium Fragrance Boutique </title>
    </head>
    <body>

        <div id="container">

            <div id="header">  
            </div>
            <div id="rightLargePane" align="right">
                <br>
                <!-- RETRIEVED PRODUCTS -->
                <?php
                while ($row = mysql_fetch_assoc($results)) {
                    echo $row["orderID"] . " ... " .$row["date"] . " ...  " . $row["amount"] . "</br>";
                }
                ?>
                 <br>
                 <div id="buttonSml">
                    <a href="index.php"><- Back </a>
                </div> <br>
            </div>


            <div id="footer"> </div>

        </div>

    </body>
</html>
