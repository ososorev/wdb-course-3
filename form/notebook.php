<?php
	session_start();
	require_once('Database.php');
	Database::connect();

	$userId= $_SESSION['ses_username'];
	$sql= Database::query("SELECT `id`, `post_name`, `date` FROM `notes` WHERE user_id = '$userId'");
	$json = [];
	while($row = mysqli_fetch_array($sql)) { // последовательно складываем в переменную $row которая является массивом строки результата запроса
	$json[] = $row; // преобразование в JSON массив
	}
	echo json_encode($json);