<?php

	require_once('Database.php');
	Database::connect();


	$json_str = file_get_contents('php://input');
	$json_obj = json_decode($json_str);

	$noteId= $json_obj->{'note_id'};

	Database::query("DELETE FROM `notes` WHERE id = '$noteId'");

	echo "Succses";