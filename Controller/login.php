<?php

include_once "../model/Customer.php";
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$designer = new Customer();

$email = trim($_POST["txtLemail"]);
$password = trim($_POST["txtLpassword"]);

//INPUT DATA VALIDATION AND LOGIN
if ($email != NULL && $password != NULL) {
    if($email == 'administrator' ){
         if ($designer->login($email, $password) === TRUE) {
        
        session_start();
        $_SESSION["userID"] = $email;

        include "../header.php";
        echo '<br><img src="../Views/img/login.jpg" width="300" height="150"> <br>'
        . '<br> <a href="../admin/index.php?id=' . $email . '"> Welcome Administrator - Proceed to MENU </a><br><br>';
        echo '<br><img src="../Views/img/header1.jpg" width="300" height="50"> <br><br>';
        include "../footer.php";
    } else {
        include "../header.php";
        echo 'Incorrect ADMINISTRATOR login details <br> <a href="../index.php"> <-  Try Login again</a>';
        include "../footer.php";
    }
    }else{
    if ($designer->login($email, $password) === TRUE) {
        
        session_start();
        $_SESSION['orderID'] = getRandID();
        $_SESSION["userID"] = $email;

        include "../header.php";
        echo '<br><img src="../Views/img/login.jpg" width="300" height="150"> <br>'
        . '<br> <a href="../views/homepage.php?id=' . $email . '"> Select Fragrance By DESIGNER > </a><br><br>';
        echo '<br><img src="../Views/img/header1.jpg" width="300" height="50"> <br><br>';
        include "../footer.php";
    } else {
        include "../header.php";
        echo 'Incorrect login details <br> <a href="../index.php"> <-  Try Login again</a>';
        include "../footer.php";
    }
    }
} else {
    include "../header.php";
    echo "Please enter correct login details <br><br>";
    echo '<a href="../index.php" > <- Try login again </a>';
    include "../footer.php";
}

// Generate Random ID
function getRandID() {
    $orderID = date('m') . rand(100, 999) . date('d') . rand(100, 999);
    return $orderID;
}
