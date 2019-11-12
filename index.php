<?php 
//	$dataSource = 'mysql:dbname=registration;host=localhost';
//	$user = 'root';
//	$pass = '';
//	$db = new PDO($dataSource, $user, $pass);
//	$db->exec("INSERT INTO regist(username, password, email) VALUES ('$username', '$password', '$email')");

	$username = $_REQUEST ["username"];
	$password = $_REQUEST ["password"];
	$confirmPassword = $_REQUEST ["confirmPassword"];
	$email = $_REQUEST ["email"];

	if (!empty($username)&&!empty($password)&&!empty($confirmPassword)&&!empty($email)){
    	$result = validate();
		echo ($result);
	}
	function validate() {					
//		if ($password == $confirmPassword) {
//			if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
				$result = "Successful!";
//			} 
//			else if (1==1){
//				$result = "Invalid email";
//			}
//		else {
//			$result = "Invalid password";
//		}
		return($result);
		}
//	}
$connection = mysqli_connect("localhost", "root", "", "registration");
mysqli_query($connection, "INSERT INTO regist(username, password, email) VALUES ('$username', MD5('$password'), '$email')");
?>