<?php
	session_start();
		if (!isset($_SESSION['ses_username'])){
			$_SESSION['ses_username']= [];
		}
	$connection= mysqli_connect("localhost", "root", "", "database");

	$noteName= $_REQUEST['note_name'];
	$noteDate= $_REQUEST['note_date'];
	$noteText= $_REQUEST['note_text'];
	$noteId= $_REQUEST['button_save'];
	$userId= $_SESSION['ses_username'];

	mysqli_query($connection, "UPDATE `notes` SET `post_name`='$noteName',`date`='$noteDate',`content`='$noteText' WHERE id = '$noteId'");

	echo "Succses";
	
	
?>