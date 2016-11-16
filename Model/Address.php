<?php
// Include database interface class
include 'Controller/database.php';

/**
 * Description of address
 *
 * @author 210115408
 */

class address {
    // Address class members (attributes)
    private $customerID;
    private $houseAddress;
    private $city;
    private $zip;
    
    // Constructor
    function __construct($customerID) {
        $this->customerID = $customerID;
    }
    
    // Mutator methods
    function setCustomerID($customerID) {
        $this->customerID = $customerID;
        return $this;
    }

    function setHouseAddress($houseAddress) {
        $this->houseAddress = $houseAddress;
        return $this;
    }

    function setCity($city) {
        $this->city = $city;
        return $this;
    }

    function setZip($zip) {
        $this->zip = $zip;
        return $this;
    }

    // Accessor methods
    function getCustomerID() {
        return $this->customerID;
    }

    function getHouseAddress() {
        return $this->houseAddress;
    }

    function getCity() {
        return $this->city;
    }

    function getZip() {
        return $this->zip;
    }



}
