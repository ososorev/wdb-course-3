<?php

	require_once('Database.php');
	Database::connect();

	$json_str = file_get_contents('php://input');
	$json_obj = json_decode($json_str);

	$noteId= $json_obj->{'note_id'};

	$sql= Database::query("SELECT `id`, `post_name`, `date`, `content` FROM `notes` WHERE id = '$noteId'");
	$json = [];
	$json = mysqli_fetch_array($sql);

	echo json_encode($json);