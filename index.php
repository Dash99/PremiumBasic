 <!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php 
// DESTROY ANY STARTED SESSION ON LOAD
if(isset($_SESSION)){ 
session_destroy();
}
?>

<html>
    <head>
        <meta charset="UTF-8">
        <link type="text/css" href="views/css/myStyle.css" rel="stylesheet">
        <link type="text/css" href="views/css/myStyle2.css" rel="stylesheet" media="screen and (max-width: 800px)">
        <title> Premium Fragrance Boutique </title>
    </head>
    <body>

        <div id="container">

            <div id="header"> 
            </div>
            
            <div id="middlePane" align="center"> 
                <form class="formHome" method="POST" action="Controller/login.php">
                    <h2> Sign In </h2>
                    Email <br> <input type="text" name="txtLemail" class="formHome"> <br>
                    Password <br> <input type="password" name="txtLpassword" class="formHome"> <br>
                    <br> <input type="submit" value="Sign In" class="formHome">
                </form>
            </div>
            
            <div id="rightPane" align="center"> 
                <form class="formHome" method="POST" action="controller/register.php">
                    <h2> Register Account </h2>
                    First Name <br> <input type="text" name="txtFname" class="formHome"> <br>
                    Last Name <br> <input type="text" name="txtLname" class="formHome"> <br><br>
                    
                    Gender <br> 
                    male<input type="radio" name="txtGender" class="formHome" value="Male" checked> &nbsp; &nbsp; &nbsp; &nbsp;
                    female<input type="radio" name="txtGender" class="formHome" value="Female" > <br><br>
                    
                    ID No# <br> <input type="text" name="txtIDNo" class="formHome"> <br> <br>

                    Contact No <br> <input type="tel" name="txtContact1" class="formHome"> <br>
                    Contact (alt) <br> <input type="tel" name="txtContact2" class="formHome"> <br><br>
                    
                    Email <br> <input type="text" name="txtEmail" class="formHome"> <br>
                    Password <br> <input type="password" name="txtPassword" class="formHome"> <br>
                    Password <br> <input type="password" name="txtPassword2" class="formHome"> <br>
                    <br> <input type="submit" value="Register" class="formHome">
                </form>
            </div>
            
            <div id="footer"> 
                
            </div>

        </div>

    </body>
</html>

