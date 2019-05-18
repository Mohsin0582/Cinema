<?php
    // specify your own database credentials
     $host = "localhost";
     $username = "root";
     $password = "";
	 $db="cinema";
     $conn;


    // get the database connection
	$conn = null;
	$conn = new mysqli($host, $username, $password, $db);
	if ($conn->connect_error) 
		die("Connection failed: " . mysqli_connect_error());  
?>