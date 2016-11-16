<?php

/**
 * Description of database
 *
 * @author 210115408
 */
class database {
    // Database connection declarations
    private $host = "localhost";
    private $username = "root";
    private $password = "";
    
   // Connect to server and select database
    function connect($dbName){
        $conn = $this->getConnection();
        if($conn===FALSE){
            echo mysql_error();
        }else{
            mysql_select_db($dbName, $conn);
        }
    }
    
    //Connection Accessor
    public function  getConnection(){
         return mysql_connect($this->host, $this->username);
    }
    
    
    // Disconnect sql
    function disconnect(){
        mysql_close();
    }
}
