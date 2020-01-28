<?php

	$connection= mysqli_connect("localhost", "root", "", "database");

	$json_str = file_get_contents('php://input');
	$json_obj = json_decode($json_str);

	$noteId= $json_obj->{'note_id'};

	mysqli_query($connection, "DELETE FROM `notes` WHERE id = '$noteId'");

	echo "Succses";
	
	
?>