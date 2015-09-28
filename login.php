<?php 
include ('connect.php');
?>

<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Project Login</title>
	<link rel="stylesheet" href="css/normalize.css">
	<link rel="stylesheet" href="css/main.css">
</head>
<body>
	<?php 
		if(isset($_SESSION['logged_in'])) {
			echo ('You are already logged in! Click <a href="logout.php">here</a> to log out.');
		} else {
			echo 'Log in.';
			echo '<form action="process_login.php" method="POST">';
			echo '<input type="text" name="username" placeholder="Username">';
			echo '<input type="text" name="password" placeholder="Password">';
			echo '<input type="submit" value="submit">';
			echo '</form>';
		}
	?>
</body>
</html>