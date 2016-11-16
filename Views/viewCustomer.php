<!DOCTYPE html>
<?php

include '../Controller/database.php';
include '../Model/Customer.php';

session_start();
$userID = $_SESSION["userID"];

$designer = new Customer();

$results = $designer->getCustInfo($userID);

$row =  mysql_fetch_assoc($results);

/////////////////

function doSpace($count){
    $x = 0;
    $space = '&nbsp';
    while($x <= $count ){
        $space = $space.'&nbsp';
        $x++;
    }
    return $space;
}
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
        <link type="text/css" href="css/myStyle2.css" rel="stylesheet" media="screen and (max-width: 800px)">
        <title> Premium Fragrance Boutique </title>
    </head>
    <body>

        <div id="container">

            <div id="header">  
            </div>
            
            <h3><a href="homepage.php"> < back </a></h3>
            
            <div id="leftPane" align="center">
                <br>
                <div class="navigate"> <a href="homepage.php">Home</a></div> 
                <div class="navigate"><a href="viewCart.php">My Cart </a></div>  
                <div class="navigate"><a href="aboutUs.php">About Us </a></div> 
                <div class="navigate"><a href="../index.php">Logout </a></div> 
            </div>
            
            
            <div id="reportView" align="left"> 
                <h5> 
                    <?php
                    
                    echo 'FULL NAMES : '.doSpace(10).$row["fName"]." ".$row["lName"]."<br><br>";
                    echo 'CONTACTS : '.doSpace(13).$row["contact1"]." / ".$row["contact2"]."<br><br>";
                    echo ' EMAIL : '.doSpace(20).$row["email"]."<br><br>";
                    
                    ?>
                </h5>
            </div>
            
            
            
            <div id="footer"> </div>

        </div>

    </body>
</html>
