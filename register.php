<?php 
	$username = $_REQUEST ["username"];
	$password = $_REQUEST ["password"];
	$confirmPassword = $_REQUEST ["confirmPassword"];
	$email = $_REQUEST ["email"];

	if (!empty($username)&&!empty($password)&&!empty($confirmPassword)&&!empty($email)){
    	$result = validate();
		echo ($result);
	}
	else {
		$result = "Fill in the empty fields";
		echo ($result);
	}
	function validate() {
		global $password;
		global $confirmPassword;
		global $email;
		if ($password == $confirmPassword) {
			if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
				$result = "Successful!";
			} 
			else {
				$result = "Invalid email";
			}
		}
		else {
			$result = "Invalid password";
		}
		return($result);
	}

$connection = mysqli_connect("localhost", "root", "", "notebook");
mysqli_query($connection, "INSERT INTO regist(username, password, email) VALUES ('$username', MD5('$password'), '$email')");

	if ($result == "Successful!"){ 
		echo "<META HTTP-EQUIV='Refresh' content='1; URL=index.html'>";
		exit(); 
	} 
?>