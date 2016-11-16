<?php
// Include database interface class
include '../Controller/database.php';

/**
 * Description of Order
 *
 * @author 210115408
 */

class Designer {
    // Order class members (attributes)
     private $dbName = "premiumdb";
    private $orderID;
    private $customerID;
    private $date;
    private $balance;
    
    
    // Constuctor
    function __construct($orderID, $customerID, $balance) {
         $this->orderID = $orderID;
         $this->customerID = $customerID;
        $this->date = date('y-m-d');
        $this->balance = $balance;
    }
    
    
    // Mutator methods
    function setCustomerID($customerID) {
        $this->customerID = $customerID;
        return $this;
    }
    
    function setOrderID($orderID){
        $this->orderID = $orderID;
    }

    function setDate($date) {
        $this->date = $date;
        return $this;
    }

    function setBalance($balance) {
        $this->balance = $balance;
        return $this;
    }

    // Accessor methods
    function getOrderID(){
        return $this->orderID;
    }
    
    function getCustomerID() {
        return $this->customerID;
    }

    function getDate() {
        return $this->date;
    }

    function getBalance() {
        return $this->balance;
    }

 // Add cart to Order
    public function addNewOrder() {
        $db = new database();
       // $sql = "INSERT INTO order(orderID, email, date, balance) VALUES('" . $this->orderID . "' , '" . $this->date. "' , '".$this->balance."' ) ";
        $sql = "INSERT INTO `order` (`orderID`, `email`, `date`, `balance`) "
                . "  VALUES ('".$this->orderID."', '".$this->customerID."', '".$this->date."', '".$this->balance."')";
        $sql2="DELETE FROM orderCart WHERE orderID=".$this->orderID;
        
         $db->connect($this->dbName);
        mysql_query($sql2,$db->getConnection());
        $result = mysql_query($sql, $db->getConnection());

        if ($result === FALSE) {
            echo mysql_error($db->getConnection());
            return FALSE;
        } else {
            return TRUE;
        }
        $db->disconnect();
    }
    
    // Get Order Information by OrderID
      public function getAllOrders(){
         $db = new database();
        $sql = "SELECT * FROM `order`" ;
        $db->connect($this->dbName);
        $result = mysql_query($sql, $db->getConnection());
        return $result;
    }
    
     // Get Order Information by OrderID
      public function getOrderInfo($orderID){
         $db = new database();
        $sql = "SELECT * FROM order WHERE orderID=".$orderID;
        $db->connect($this->dbName);
        $result = mysql_query($sql, $db->getConnection());
        return $result;
    }

}