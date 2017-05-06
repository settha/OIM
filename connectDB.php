<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "oim";

	// Create connection
	$dbConnect = mysqli_connect($servername, $username, $password);

	// Check connection
	if (!$dbConnect) {
	    die("Connection failed: " . mysqli_connect_error());
	}

	//Connect to Database
	$selectDB = mysqli_select_db($dbConnect, $dbname);

	//Set UTF-8
    mysqli_query($dbConnect,"SET NAMES UTF8");
?>