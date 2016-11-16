<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->

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

            <div id="middlePane" align="left">
                <br><form class="formHome" method="POST" action="addDesigner.php">
                    <h4> add Designer </h4>
                    DesignerID <br> <input type="text" name="txtDesignerID" class="formHome"> <br>
                    Name <br> <input type="text" name="txtName" class="formHome"> <br>
                    Description <br> <input type="text" name="txtDescription" class="formHome"> <br>
                    <br> <input type="submit" value="add" class="formHome">
                </form>
                <br><br>
                <div id="buttonSml">
                    <a href="index.php"><- Back </a>
                </div> <br>
            </div>

            <div id="middlePane" align="left">
                <br>
                <form class="formHome" method="POST" action="addProduct.php">
                    <h4> add Product </h4>
                    ProductID <br> <input type="text" name="txtProductID" class="formHome"> <br>
                    DesignerID <br> <input type="text" name="txtDesignerID" class="formHome"> <br>
                    Description <br> <input type="text" name="txtDescription" class="formHome"> <br>
                    Gender<br> <input type="text" name="txtGender" class="formHome"> <br>
                    Size <br> <input type="text" name="txtSize" class="formHome"> <br>
                    Price <br> <input type="text" name="txtPrice" class="formHome"> <br>
                    <br> <input type="submit" value="add" class="formHome">
                </form>
                <br>
            </div>

            <div id="rightPane" align="center"> 
<br>
                 
            </div>
            
            

            <div id="footer"> </div>

        </div>

    </body>
</html>
