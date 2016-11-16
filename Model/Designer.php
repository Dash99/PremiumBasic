<?php
// Include database interface class
include_once "../controller/database.php";

/**
 * Description of Designer
 *
 * @author 210115408
 */
class Designer {

    // Designer class members (attributes)
    private $dbName = "premiumdb";
    private $designerID;
    private $name;
    private $description;

    // Constructor
    function _construct($designerID, $name, $description) {
        $this->designerID = $designerID;
        $this->name = $name;
        $this->description = $description;
    }
    
    function designer(){
        $this->designerID = "";
        $this->name = "";
        $this->description = "";
    }

    // Mutator methods
    function setDesignerID($designerID) {
        $this->designerID = $designerID;
        return $this;
    }

    function setName($name) {
        $this->name = $name;
        return $this;
    }

    function setDescription($description) {
        $this->description = $description;
        return $this;
    }

    // Accessor methods
    function getDesignerID() {
        return $this->designerID;
    }

    function getName() {
        return $this->name;
    }

    function getDescription() {
        return $this->description;
    }
    
    //ADD new Designer
    public function addDesigner($designerID, $name, $description) {
        $db = new database();
        $sql = "INSERT INTO Designer(designerID, name, description ) "
                . "VALUES('" . $designerID . "' , '" . $name . "' , '" . $description . "')";
        $db->connect($this->dbName);
        $result = mysql_query($sql, $db->getConnection());

        if ($result === FALSE) {
            echo mysql_error($db->getConnection());
        } else {
            return TRUE;
        }
        $db->disconnect();
    }
    
     //DELETE Designer
    public function deleteDesigner($designerID) {
        $db = new database();
        $sql = "DELETE FROM Designer WHERE designerID='".$designerID."'";
        $db->connect($this->dbName);
        $result = mysql_query($sql, $db->getConnection());

        
        
        if ($result === FALSE) {
            echo mysql_error($db->getConnection());
        } else {
            return TRUE;
        }
        $db->disconnect();
    }
    
    

    public function getDesignersList(){
         $db = new database();
        $sql = "SELECT * FROM `designer` WHERE designerID!=0";
        $db->connect($this->dbName);
        $result = mysql_query($sql, $db->getConnection());
        return $result;
    }
    
}
