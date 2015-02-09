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
        die("<p>Error: " . $connection->connect_error . "</p>");
    } 
//Below is the code that tries to access a database on MYSQLI server    
    $exists = $connection->select_db($database);
//Below is the code I use to test if the $exists database is working
    if(!$exists) {
//Below is the code that created my database using its connection
        $query = $connection->query("CREATE DATABASE $database");
//Below is the code that says if my ddatabase was created the  it will echo/say
//Successfully created database
        if($query) {
            echo "<p>Successfully created database: " . $database . "</p>";
        }
//Below is the code using an else statement to say that it will echo out  
//Database already exists     
    }else {
            echo "<p>Database already exists</p>";
        }
//Below is the code that creates a new query for tables        
    $query = $connection->query("CREATE TABLE posts ("
//Below is the code that lets me have an integer of 11 posts which is  more than 
//1 billion; the NOT NULL code is saying that the post has to be filled with 
//content
            . "id int(11) NOT NULL AUTO_INCREMENT,"
//Below is the code that says there can only be 225 characters in each post and 
//it has to be filled because of the NOT NULL line of code
            . "title varchar(225) NOT NULL,"
//Below is code that says each post has to be filled with content
            . "post text NOT NULL,"
//Below is code that links its id to my integer id of 11
            . "PRIMARY KEY (id))");
//Below is the code that creates the table once
    if($query) {
        echo "<p>Successfully create table: posts</p>";
//Below is the code that says the query on top is already existing
    } else {
        echo "<p>$connection->error</p>";
    }
    
//Below is the code that closes my connection after it is successful 
    $connection->close();
    
//    hi
//    hi
//    hi