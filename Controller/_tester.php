<?php

include '../Model/Designer.php';

$designer = new Designer();

$results = $designer->getDesignersList();

while($row = mysql_fetch_assoc($results)){
    echo $row["designerID"].' &nbsp; &nbsp;'.$row["name"].'<br>';
}





