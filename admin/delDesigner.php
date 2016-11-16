<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include_once "../model/Designer.php";

$name = $_GET["id"];

$designer = new Designer();

if($designer->deleteDesigner($name)== TRUE){
     //DISPLAY ORDER REPORT
    include "../header.php";
    echo 'Designer deleted Successfully! <br><br>'; 
    echo '<br><br><a href="designers.php">  <- Back </a></h4>';
    include "../footer.php";
}



