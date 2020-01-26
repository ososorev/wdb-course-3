<?php
	session_start();
		if (!isset($_SESSION['ses_username'])){
			$_SESSION['ses_username']= [];
		}
	$connection= mysqli_connect("localhost", "root", "", "database");

	$userId= $_SESSION['ses_username'];

	$res= mysqli_query($connection, "SELECT `name` FROM `users` WHERE id = '$userId'");
	$row = mysqli_fetch_assoc($res);
	
	echo  $row["name"];
?>