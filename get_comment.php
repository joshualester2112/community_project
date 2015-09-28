<?php 	
	$commentSQL = "SELECT * FROM comments INNER JOIN users ON comments.user_id = users.id";
	$results = $link->query($commentSQL);
	$rows = $results->num_rows;

	while ($row = $results->fetch_assoc()) {

		echo '<div class="comment-container">';
		echo '<div class="user-comment">';
			echo '<figure class="profile-pic">' . '<img src="' . $row['image'] . '"/>' . '<figcaption class="username">' . $row['username'] . '</figcaption>' . '</figure>';
			echo '<div class="comment">' . $row['comment'] . '</div>';
			echo '</div>';
		echo '</div>';
	}
?>