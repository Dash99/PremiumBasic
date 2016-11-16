<!DOCTYPE html>
<?php
$designerID = trim($_GET['id']);
include_once "../model/Product.php";
?>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->

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

            <h3><a href="homepage.php"> < back </a></h3>

            <div id="leftPane" align="center">
                <div class="navigate"> <a href="homepage.php"><br>Home</a></div> 
                <div class="navigate"><a href="viewCart.php"><br>My Cart </a></div> 
                <div class="navigate"><a href="viewCustomer.php"><br>My Profile </a></div>  
                <div class="navigate"><a href="aboutUs.php"><br>About Us </a></div> 
                <div class="navigate"><a href="../index.php">Logout </a></div> 
            </div>

            <div id="reportView" align="right"> 
                <h4> 
                    <?php
                    $designer = new Product();
                    $result = $designer->getProductList($designerID);
                    while ($row = mysql_fetch_assoc($result)) {
                        echo "</h5>" . $row["description"] . " <a href='../Controller/addToCart.php?pid=" . $row["productID"] . "' > <img src=" . '"img/buy.jpg"' . " width=" . '"40"' . " height=" . '"40"' . "> >>> add to myCart >>> </a> </h5>" . $row["size"] . "ml " . " |  " . $row["price"] . "<br></br>";
                    }
                    ?>
                </h4>
                <br><br>
            </div>
            <div align="right"> <a href="../Views/homepage.php"> <- Back (add to order) </a> 
            </div>

            <div id="footer"> </div>

        </div>

    </body>
</html>