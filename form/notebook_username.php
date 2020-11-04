<?php
	session_start();
	require_once('Database.php');
	Database::connect();

	$userId= $_SESSION['ses_username'];

	$res= Database::query("SELECT `name` FROM `users` WHERE id = '$userId'");
	$row = mysqli_fetch_assoc($res);
	
	echo  $row["name"];