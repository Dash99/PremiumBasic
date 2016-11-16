<?php

// Include database interface class
include '../Controller/database.php';

/**
 * Description of ShoppingCart
 *
 * @author 210115408
 */
class OrderCart {

    //Shopping Cart class members
    private $dbName = "premiumdb";
    private $orderID;
    private $productID;

    // Constructor
    function __construct() {
        $this->orderID = 0;
        $this->productID = '';
    }

    // Mutator methods
    function setOrderID($orderID) {
        $this->orderID = $orderID;
        return $this;
    }

    function setProductID($productID) {
        $this->productID = $productID;
        return $this;
    }

    // Accessor methods
    function getOrderID() {
        return $this->orderID;
    }

    function getProductID() {
        return $this->productID;
    }

    // Add Products to Shopping Cart
    public function addOrderCart() {
        $db = new database();
        $sql = "INSERT INTO orderCart(orderID, productID) VALUES('" . $this->orderID . "' , '" . $this->productID . "') ";
        $sql2="Update product set qty = (qty-1) where productID='".$this->productID."'";
        $db->connect($this->dbName);
        
        $result = mysql_query($sql, $db->getConnection());
        mysql_query($sql2,$db->getConnection());

        if ($result === FALSE) {
            echo mysql_error($db->getConnection());
        } else {
            return TRUE;
        }
        $db->disconnect();
    }

    // Generate Random ID
    public function getRandID() {
        $orderID = date('m') . rand(100, 999) . date('d') . rand(100, 999);
        return $orderID;
    }

    // Check if  ID exists : returns True / False
    public function isOrderID($randID) {
        $db = new database();
        $sql = "SELECT * FROM Order WHERE orderID=" . $randID;

        $db->connect($this->dbName);
        $result = mysql_query($sql, $db->getConnection());

        if ($result === TRUE) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

    // Get productID's from cart
    function getCartProducts($orderID) {
        $db = new database();
        $sql = "SELECT a.productID, b.description, b.price
                        FROM orderCart a, product b 
                        WHERE a.productID = b.productID
                        AND a.orderID='" . $orderID . "'";           /* "SELECT * FROM OrderCart WHERE orderID='" . $orderID . "' "; */
        $db->connect($this->dbName);
        $result = mysql_query($sql, $db->getConnection());

        if ($result === FALSE) {
            echo mysql_error($db->getConnection());
        } else {
            return $result;
        }
    }

    function getCartTotalAmt($orderID) {
        $db = new database();
        $sql = "SELECT SUM(b.price) AS TotalPrice
                        FROM orderCart a, product b 
                        WHERE a.productID = b.productID
                        AND a.orderID='" . $orderID . "'";           /* "SELECT TOTAL SUM OF PRICE FROM products WHERE cart productID='"; */
        $db->connect($this->dbName);
        $result = mysql_query($sql, $db->getConnection());

        if ($result === FALSE) {
            echo mysql_error($db->getConnection());
        } else {
            return $result;
        }
    }

    function removeItem($productID, $orderID) {
        $db = new database();
        $sql ="DELETE FROM orderCart WHERE orderID='".$orderID."' AND productID='".$productID."'" ;         
        $sql2="Update product set qty = (qty+1) where productID='".$this->productID."'";
        
        $db->connect($this->dbName);
        
        $result = mysql_query($sql, $db->getConnection());
        mysql_query($sql2,$db->getConnection());
        
        if ($result === FALSE) {
            echo mysql_error($db->getConnection());
        } else {
            return $result;
        }
    }

}
