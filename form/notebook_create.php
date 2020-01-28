<?php
	session_start();
	$connection= mysqli_connect("localhost", "root", "", "database");

	$noteName= $_REQUEST['note_name'];
	$noteDate= $_REQUEST['note_date'];
	$noteText= $_REQUEST['note_text'];
	$userId= $_SESSION['ses_username'];

	mysqli_query($connection, "INSERT INTO notes(user_id, post_name, date, content) VALUES ('$userId', '$noteName', '$noteDate', '$noteText')");
?>