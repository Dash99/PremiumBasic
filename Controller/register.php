<?php

include_once "../model/Customer.php";
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

// POST VARIABLES
$fName = trim($_POST["txtFname"]);
$lName = trim($_POST["txtLname"]);
$gender = trim($_POST["txtGender"]);
$customerID = trim($_POST["txtIDNo"]);
$contact1 = trim($_POST["txtContact1"]);
$contact2 = trim($_POST["txtContact2"]);
$email = trim($_POST["txtEmail"]);
$password = trim($_POST["txtPassword"]);
$password2 = trim($_POST["txtPassword2"]);

//VALIDATE INPUT DATA 
if (empty($_POST["txtFname"])or empty($_POST["txtLname"]) or empty($_POST["txtIDNo"]) or empty($_POST["txtContact1"]) or empty($_POST["txtContact2"]) or empty($_POST["txtEmail"]) or empty($_POST["txtPassword"]) or empty($_POST["txtPassword2"])) {
    include "../header.php";
    echo 'Please fill in all required fields... </br> <a href="../index.php"><- Back to sign up</a>';
    include "../footer.php";
} else {
    if ($password !== $password2) {
        include "../header.php";
        echo 'Please make sure the Passwords match... </br> <a href="../index.php"><- Back to sign up</a>';
        include "../footer.php";
    } else {
// COSTOMER OBJECT
        $designer = new Customer();
        $designer->_Customer($fName, $lName, $gender, $customerID, $contact1, $contact2, $email, $password);

        if ($designer->addCustomer() === TRUE) {
            include "../header.php";
            echo 'Registration successful.  Welcome! </br> <a href="../index.php">Proceed to login -></a>';
            include "../footer.php";
        } else {
            echo "customer not added";
        }
    }
}
