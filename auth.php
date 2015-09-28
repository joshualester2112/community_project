<?php
	$sqlQuery = "SELECT * FROM users WHERE id = $user_id";

	$results 	= $link->query($sqlQuery);
	$rows 		= $results->num_rows;

	if ($rows >=1) {
		while ($row = $results->fetch_assoc()) {

			$user_thumbnail = $row['image'];
			$username 		= $row['username'];
		}
	} else {
		echo "No results";
	}
?>