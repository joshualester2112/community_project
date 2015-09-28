<?php
	
	include ('connect.php');


	$user_id = $_SESSION['user_id'];

	$comment = $_POST['comment'];
	$insertCommentSQL = "SELECT * FROM comments WHERE user_id = '$user_id'";

	if ($result = $link->query($insertCommentSQL)) {
		if ($result) {
			$post_commentSQL = "INSERT INTO comments (user_id, comment) VALUE ('$user_id','$comment')";
			
			if ($link->query($post_commentSQL) === false) {
				echo 'There was an issue with mySQL.';
			} else {
				
				echo "<script>window.location = 'index.php';</script>";
			}
		} else {
			die('The selected username has been taken.');
		}
	}

?>