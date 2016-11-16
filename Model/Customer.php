<?php

// Include database interface class
include_once "../controller/database.php";
/**
 * Description of Customer
 *
 * @author 210115408
 */
class Customer {

    // Class members
    private $dbName = "premiumdb";
    private $fName;
    private $lName;
    private $gender;
    private $dob;
    private $contact1;
    private $contact2;
    private $email;
    private $password;

    // Default constructor
    public function customer() {
        $this->fName = '';
        $this->lName = '';
        $this->gender = '';
        $this->dob = '';
        $this->contact1 = '';
        $this->contact2 = '';
        $this->email = '';
        $this->password = '';
    }

    public function _customer($fName, $lName, $gender, $dob, $contact1, $contact2, $email, $password) {
        $this->fName = $fName;
        $this->lName = $lName;
        $this->gender = $gender;
        $this->dob = $dob;
        $this->contact1 = $contact1;
        $this->contact2 = $contact2;
        $this->email = $email;
        $this->password = $password;
    }

    // Mutator methods
    function setFname($fName) {
        $this->fName = $fName;
    }

    function setLName($lName) {
        $this->lName = $lName;
    }

    function setGender($gender) {
        $this->gender = $gender;
    }

    function setDob($dob) {
        $this->dob = $dob;
    }

    function setContact1($contact1) {
        $this->contact1 = $contact1;
    }

    function setContact2($contact2) {
        $this->contact2 = $contact2;
    }

    function setEmail($email) {
        $this->email = $email;
    }

    function setPassword($password) {
        $this->password = $password;
    }

    // Accessor methods

    function getLName() {
        return $this->lName;
    }

    function getGender() {
        return $this->gender;
    }

    function getDob() {
        return $this->dob;
    }

    function getContact1() {
        return $this->contact1;
    }

    function getContact2() {
        return $this->contact2;
    }

    function getEmail() {
        return $this->email;
    }

    function getPassword() {
        return $this->password;
    }

    // Register New Customer
    public function addCustomer() {
        $db = new database();
        $sql = "INSERT INTO Customer(fName, lName, gender, dob, contact1, contact2, email, password) "
                . "VALUES('" . $this->fName . "' , '" . $this->lName . "' , '" . $this->gender . "' , '" . $this->dob . "' , '" . $this->contact1 . "' , '" . $this->contact2 . "' , '" . $this->email . "' , '" . md5($this->password) . "')";
        $db->connect($this->dbName);
        $result = mysql_query($sql, $db->getConnection());

        if ($result === FALSE) {
            echo mysql_error($db->getConnection());
        } else {
            return TRUE;
        }
        $db->disconnect();
    }

    // Login (Existing Customer)
    public function login($email, $password) {
        $db = new database();
        $sql = "SELECT * FROM Customer WHERE Email='" . $email . "' ";
        $db->connect($this->dbName);
        $result = mysql_query($sql, $db->getConnection());

        if ($result === FALSE) {
            echo mysql_error($db->getConnection());
        } else {
            $row = mysql_fetch_assoc($result);
            if ($row["password"] === md5($password)) {
                return TRUE;
            } else {
                return FALSE;
            }
        }
        $db->disconnect();
    }
    
    // Get Customer Information by customerID
      public function getCustInfo($customerID){
         $db = new database();
        $sql = "SELECT * FROM customer WHERE email='".$customerID."'";
        $db->connect($this->dbName);
        $results = mysql_query($sql, $db->getConnection());
        return $results;
    }
    
}
