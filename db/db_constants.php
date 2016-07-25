<?php
	$host = hosting_server;
	$username = username;
	$password = password;
	$database = db_name;

	$conn = new mysqli($host, $username, $password, $database);
	if ($conn->connect_error)
		die("failed: " . $conn->connect_error);
?>
