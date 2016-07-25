<?php
	require_once('db_constants.php');

	$hotel = $_REQUEST['hotel'];

	$results = $conn->query("SELECT username, usercomment FROM comments WHERE hotel LIKE '{$hotel}' ORDER BY comment_date DESC");
	while($row = $results->fetch_assoc())
	{
		echo "<div class='panel panel-primary'><div class='panel-heading'>";
		echo "<h3 class='panel-title'>" . $row["username"] . "</h3></div>";
		echo "<div class='panel-body'>" . $row["usercomment"] . "</div></div>";
		echo '<br>';
	}
	$conn->close();
?>