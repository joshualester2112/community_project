<?php

include ('connect.php');

$first_name 		= (isset($_POST['first_name'])) ? $_POST['first_name'] : FALSE;
$last_name 			= (isset($_POST['last_name'])) ? $_POST['last_name'] : FALSE;
$username 			= (isset($_POST['username'])) ? $_POST['username'] : FALSE;
$email 				= (isset($_POST['email'])) ? $_POST['email'] : FALSE;
$image 				= (isset($_POST['image'])) ? $_POST['image'] : '';
$password 			= (isset($_POST['password'])) ? md5($_POST['password']) : FALSE;
$verify_password 	= (isset($_POST['verify_password'])) ? md5($_POST['verify_password']) : FALSE;

$registerSQL = "SELECT * FROM users WHERE username = '$username'";

if ($result = $link->query($registerSQL)) {
	if ($password !== $verify_password) {
		die('Passwords do not match.');
	}

	if ($result->num_rows >= 1) {
		die('The selected username has been taken.');
	} else {
		$sql = "INSERT INTO users (first_name, last_name, username, email, image, password, verify_password) VALUE ('$first_name','$last_name','$username','$email','$image','$password','$verify_password')";
		
		if ($link->query($sql)) {
			$last_inserted_id 	= $link->insert_id;
			$affected_rows 		= $link->affected_rows;
		} else {
			die('There was an issue with mySQL.');
		}

		echo 'You are now registered. Click <a href="index.php">here</a> to go to the forum.';
	}
}

?>