<?php
	$host = "mysql.hostinger.in";
	$username = "u488038781_swa";
	$password = "REBECCA5922dylan";
	$database = "u488038781_me2ng";

	$conn = new mysqli($host, $username, $password, $database);
	if ($conn->connect_error)
		die("failed: " . $conn->connect_error);
?>