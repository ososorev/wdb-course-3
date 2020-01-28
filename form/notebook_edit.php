<?php

	$connection= mysqli_connect("localhost", "root", "", "database");

	$json_str = file_get_contents('php://input');
	$json_obj = json_decode($json_str);

	$noteId= $json_obj->{'note_id'};

	$sql= mysqli_query($connection, "SELECT `id`, `post_name`, `date`, `content` FROM `notes` WHERE id = '$noteId'");
	$json = [];
	$json = mysqli_fetch_array($sql);

	echo json_encode($json);
?>