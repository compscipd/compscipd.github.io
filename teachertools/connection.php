<?php

	date_default_timezone_set('America/Los_Angeles');
	
	$servername = "localhost";
	$username = "root";
	$password = "";
	$db = "teachertools";

	// Create connection
	$conn = new mysqli($servername, $username, $password, $db);

	// Check connection
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	} 

?>