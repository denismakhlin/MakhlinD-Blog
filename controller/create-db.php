<?php
//Below is the code that lets me include info from my database into my creat-db
require_once("../model/database.php");
//Below is the code that allows me to accses my mysqli server and the code in my 
//datababse to be stored in the connection object
$connection = new mysqli($host, $username, $password);
//Below is the code that opens a new connection to the MySQL server
