<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "bom";

	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($conn->connect_error) {
		//untuk menampilkan pesan error
	    die("Connection failed: " . $conn->connect_error);
	}
?>