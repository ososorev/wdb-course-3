<?php
	session_start();
		if (!isset($_SESSION['ses_username'])){
			$_SESSION['ses_username']= [];
		}
	$connection= mysqli_connect("localhost", "root", "", "database");
	
	$json_str = file_get_contents('php://input');
	$json_obj = json_decode($json_str);

	$noteId= $json_obj->{'note_id'};
	
	$noteName= $json_obj->{'note_name'};
	$noteDate= $json_obj->{'note_date'};
	$noteText= $json_obj->{'note_text'};
	$userId= $_SESSION['ses_username'];

	mysqli_query($connection, "UPDATE `notes` SET `post_name`='$noteName',`date`='$noteDate',`content`='$noteText' WHERE id = '$noteId'");

	echo "Succses";
	
	
?>