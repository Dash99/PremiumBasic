<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include_once "../model/Designer.php";

$designerID = $_POST["txtDesignerID"];
$name= $_POST["txtName"];
$description = $_POST["txtDescription"];

$designer = new Designer();

if($designer->addDesigner($designerID, $name, $description)== TRUE){
     //DISPLAY ORDER REPORT
    include "../header.php";
    echo 'Designer added Successfully! <br><br>'; 
    echo '<br><br><a href="designers.php">  <- Back </a></h4>';
    include "../footer.php";
}



