<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Register</title>
	<link rel="stylesheet" href="css/normalize.css">
	<link rel="stylesheet" href="css/main.css">
</head>
<body>
	<div class="login-wrap">
		<center>
			<h2>Register</h2>
			<div class="vanity-container">
				<form class="register" action="process_register.php" method="POST">
					<input type="text" name="first_name" placeholder="First Name">
					<input type="text" name="last_name" placeholder="Last Name">
					<input type="text" name="username" placeholder="Username">
					<input type="text" name="email" placeholder="Email">
					<input type="text" name="image" placeholder="Image URL">
					<input type="text" name="password" placeholder="Password">
					<input type="text" name="verify_password" placeholder="Verify Password">
					<input type="submit" value="Register!">
				</form>
			</div>
		</center>
	</div>
</body>
</html>