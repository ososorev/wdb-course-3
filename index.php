<?php 
	$username = $_REQUEST ["username"];
	$password = $_REQUEST ["password"];
	$confirmPassword = $_REQUEST ["confirmPassword"];
	$email = $_REQUEST ["email"];
	if (!empty($username)&&!empty($password)&&!empty($confirmPassword)&&!empty($email)){
    	$result = validate();
		echo "$result";
	}
	function validate() {					
		if ($password == $confirmPassword) {
			if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
				$result = "Successful!";
			} 
			else if (1==1){
				$result = "Invalid email";
			}
		else {
			$result = "Invalid password";
		}
		return($result);
		}
	}
	$dataSource = 'mysql:dbname=registration;host=localhost';
	$user = 'root';
	$password = '';
	$db = new PDO($dataSource, $user, $password);
	$db -> exec("INSERT INTO form(username, password, email) VALUES ('$username', MD5('$password'), '$email')");
?>