<?php
// Include database interface class
include '../Controller/database.php';

/**
 * Description of Payment
 *
 * @author 210115408
 */

class Product {
    // Payment class members (attributes)
    private $dbName = "premiumdb";
    private $orderID;
    private $date;
    private $method;
    private $amount;
    
    // Constructor
    public function __construct($orderID, $amount, $method) {
        $this->orderID = $orderID;
        $this->date = date("Y-m-d");
        $this->method = $method;
        $this->amount = $amount;
    }
    
    public function payment(){
        $this->orderID = "";
        $this->date = NULL;
        $this->method = "";
        $this->amount = 0;
    }
    
    // Mutator methods
    function setOrderID($orderID) {
        $this->orderID = $orderID;
        return $this;
    }

    function setDate($date) {
        $this->date = $date;
        return $this;
    }

    function setMethod($method) {
        $this->method = $method;
        return $this;
    }

    function setAmount($amount) {
        $this->amount = $amount;
        return $this;
    }

    // Accessor methods
    function getOrderID() {
        return $this->orderID;
    }

    function getDate() {
        return $this->date;
    }

    function getMethod() {
        return $this->method;
    }

    function getAmount() {
        return $this->amount;
    }

    

 // Record Payment Info
    public function addNewPayment() {
        $db = new database();
        $sql = "INSERT INTO `payment` (`orderID`, `date`, `method`, `amount`) VALUES ('$this->orderID', '$this->date', '$this->method', '$this->amount') ";

        $db->connect($this->dbName);
        $result = mysql_query($sql, $db->getConnection());

        if ($result === FALSE) {
            echo mysql_error($db->getConnection());
        } else {
            return TRUE;
        }
        $db->disconnect();
    }
    
     // GET Payment Info by OrderID
     public function getPaymentInfo($orderID){
         $db = new database();
        $sql = "SELECT * FROM payment WHERE orderID=".$orderID;
        $db->connect($this->dbName);
        $result = mysql_query($sql, $db->getConnection());
        return $result;
    }
    
     // GET ALL Payments
     public function getAllPayments(){
         $db = new database();
        $sql = "SELECT * FROM payment";
        $db->connect($this->dbName);
        $result = mysql_query($sql, $db->getConnection());
        return $result;
    }

}
