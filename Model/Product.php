<?php
// Include database interface class
include '../Controller/database.php';

/**
 * Description of Product
 *
 * @author 210115408
 */

class Product {

    // Product class members (Attributes)
    private $dbName="premiumdb";
    private $productID;
    private $designerID;
    private $description;
    private $gender;
    private $size;
    private $price;

    function __construct() {
        $this->productID = "";
        $this->designerID =  "";
        $this->description = "";
        $this->gender = "";
        $this->size = "";
        $this->price = "";
    }
    
    function product($productID, $designerID, $description, $gender, $size, $price){
        $this->productID = $productID;
        $this->designerID = $designerID;
        $this->description = $description;
        $this->gender = $gender;
        $this->size = $size;
        $this->price = $price;
    }
    
    // Mutator methods
    function setProductID($productID) {
        $this->productID = $productID;
    }

    function setDesignerID($designerID) {
        $this->designerID = $designerID;
    }

    function setDescription($description) {
        $this->description = $description;
    }

    function setGender($gender) {
        $this->gender = $gender;
    }

    function setSize($size) {
        $this->size = $size;
    }

    function setPrice($price) {
        $this->price = $price;
    }

    // Accessor methods
    function getProductID() {
        return $this->productID;
    }

    function getDesignerID() {
        return $this->designerID;
    }

    function getDescription() {
        return $this->description;
    }

    function getGender() {
        return $this->gender;
    }

    function getSize() {
        return $this->size;
    }

    function getPrice() {
        return $this->price;
    }
    
     //ADD new Product
    public function addProduct($productID,$designerID, $description, $gender, $size, $price) {
        $db = new database();
        $sql = "INSERT INTO Product(productID, designerID, description, gender, size, price) "
                . "VALUES('" . $productID . "' , '" . $designerID . "' , '" . $description . "' , '" . $gender . "' , '" . $size . "' , '" . $price . "')";
        $db->connect($this->dbName);
        $result = mysql_query($sql, $db->getConnection());

        if ($result === FALSE) {
            echo mysql_error($db->getConnection());
        } else {
            return TRUE;
        }
        $db->disconnect();
    }

    // GET List of ALLProduct
     public function getAllProducts(){
         $db = new database();
        $sql = "SELECT * FROM product";
        $db->connect($this->dbName);
        $result = mysql_query($sql, $db->getConnection());
        return $result;
    }
    
    // GET Product List by designerID
     public function getProductList($designerID){
         $db = new database();
        $sql = "SELECT * FROM product WHERE designerID=".$designerID;
        $db->connect($this->dbName);
        $result = mysql_query($sql, $db->getConnection());
        return $result;
    }
}
