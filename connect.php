<?php
	session_start();
	$link = mysqli_connect('127.0.0.1','root','root','php_project');

	if (mysqli_connect_errno()) {
		die('Could not connect to server.' . mysql_error());
	}
?>