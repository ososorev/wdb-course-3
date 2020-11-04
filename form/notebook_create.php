<?php
	session_start();
	require_once('Database.php');
	Database::connect();

	$noteName= $_REQUEST['note_name'];
	$noteDate= $_REQUEST['note_date'];
	$noteText= $_REQUEST['note_text'];
	$userId= $_SESSION['ses_username'];

	Database::query("INSERT INTO notes(user_id, post_name, date, content) VALUES ('$userId', '$noteName', '$noteDate', '$noteText')");