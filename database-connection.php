<?php
    // Store Session Data
	//variables for connecting to database
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "congress";
	
	//connect to database using variables
	$conn = new mysqli($servername, $username, $password, $dbname);

	//connection error
	if ($conn->connect_error) {
		die("Connection failed: ". $connect->connect_error);
	}
?> 