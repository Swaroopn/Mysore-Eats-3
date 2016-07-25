<?php
	require_once('db_constants.php');
	$data = json_decode(file_get_contents("php://input"), true);

	$hotel = mysqli_real_escape_string($conn,$data->hotel);
	$likes = mysqli_real_escape_string($conn,$data->likes);

	// Check connection
	if (mysqli_connect_errno()){
  		echo "Failed to connect to MySQL: " . mysqli_connect_error();
  	}

	$query = "UPDATE hotels SET likes=likes+{$likes} WHERE hotel = '{$hotel}'";
	$likequery = "SELECT likes from hotels WHERE hotel = '{$hotel}'";
	
	if (! @ mysqli_query($conn, $query))
		die ("Couldn't increment Like!");
	else{
		$result = mysqli_query($conn, $likequery);
		$row = mysqli_fetch_row($result);
		echo $row[0];
	}

	$conn->close();
?>