<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include_once "../model/Designer.php";

$name = $_POST["txtProductID"];
$name= $_POST["txtDesignerID"];
$description = $_POST["txtDescription"];
$gender= $_POST["txtGender"];
$size= $_POST["txtSize"];
$price= $_POST["txtPrice"];

$designer = new Designer();

if($designer->addDesigner($name, $name, $description)== TRUE){
     //DISPLAY ORDER REPORT
    include "../header.php";
    echo 'Designer added Successfully! <br><br>'; 
    echo '<br><br><a href="designers.php">  <- Back </a></h4>';
    include "../footer.php";
}



