<?php
class Database {
//Below are global variables that are set as private so they can only be
//accessed within this class
    private $connection;
    private $host;
    private $username;
    private $password;
    private $database;
//Below I am adding information into my global variables to add to my object
    public function __construct($host, $username, $password, $database) {
        $this->host = $host;
        $this->username = $username;
        $this->password = $password;
        $this->database = $database;
           
    }
    
    public function openConnection() {
        
    }
    
    public function closeConnection() {
        
    }
    
    public function query($string) {
        
    }
}
