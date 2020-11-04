<?php
	require_once('Database.php');
	Database::connect();
	
	$json_str = file_get_contents('php://input');
	$json_obj = json_decode($json_str);

	$noteId= $json_obj->{'note_id'};
	
	$noteName= $json_obj->{'note_name'};
	$noteDate= $json_obj->{'note_date'};
	$noteText= $json_obj->{'note_text'};

	Database::query("UPDATE `notes` SET `post_name`='$noteName',`date`='$noteDate',`content`='$noteText' WHERE id = '$noteId'");