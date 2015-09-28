<?php 
include ('connect.php');

if(isset($_SESSION['user_id'])) {
	$user_id = $_SESSION['user_id'];
} else {
	die (include ('welcome.html'));
}

?>

<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="css/normalize.css">
	<link rel="stylesheet" href="css/main.css">
	<title>PHP Project</title>
</head>
<body>
	<div class="content-wrap">
		<header>
			<?php include ('content/header.html'); ?>
		</header>

		<h2 class="welcome-msg">This space is dedicated to our residents and let's them engage in online discussion related to our community here at Arbor Gates of Buckhead.</h2>
		<section>
			<div class="comment_form_container">
				<form action="post_comment.php" method="POST">
					<textarea class="comment-box" rows="10" cols="70" name="comment" wrap="hard">Leave a comment...</textarea>
					<input type="submit" value="Post Comment">
				</form>
			</div>
			<div class="comments-wrap">
				<?php include ('get_comment.php'); ?>
			</div>
		</section>
		
		<footer>
			<?php include ('content/footer.html'); ?>
		</footer>
	</div>
	
</body>
</html>