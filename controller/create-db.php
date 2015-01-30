<?php
//Below is the code that lets me include info from my database into my creat-db
//The __DIR__ . line of code is saying starting from this location we will move 
//on
require_once(__DIR__ ."/../model/database.php");
//Below is the code that allows me to accses my mysqli server and the code in my 
//datababse to be stored in the connection object
$connection = new mysqli($host, $username, $password);
//Below is the code that checks if I have a connection error
    if ($connection->connect_error) {
//Below is code that kills my program if I have an error and it says what the
//error was
        die("Error: " . $connection->connect_error);
    } 
//Below is the code that tries to access a database on MYSQLI server    
    $exists = $connection->select_db($database);
//Below is the code I use to test if the $exists database is working
    if(!$exists) {
        echo "Database Exists";
    }
    
//Below is the code that closes my connection after it is successful 
    $connection->close();