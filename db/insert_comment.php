<?php
	require_once('db_constants.php');

	$data = json_decode(file_get_contents("php://input"));

	if ($_SERVER['REQUEST_METHOD'] == 'POST') {
		$username = mysqli_real_escape_string($conn,$data->username);
		$hotel = mysqli_real_escape_string($conn,$data->hotel);
		$comment = mysqli_real_escape_string($conn,$data->comment);

		$sql = "INSERT INTO comments(hotel, username, usercomment) VALUES('$hotel', '$username', '$comment')";

		if ($conn->query($sql)){
			echo "<div class='panel panel-primary'><div class='panel-heading'>";
			echo "<h3 class='panel-title'>" . $username . "</h3></div>";
			echo "<div class='panel-body'>" . $comment . "</div></div>";
			echo '<br>';
		}
		else
			echo $conn->error;
	}
	$conn->close();
?>