<?php
	$connection= mysqli_connect("localhost", "root", "", "database");
	$userName=$_REQUEST['username'];
	$password=$_REQUEST['password'];
	$message = "wrong answer";

if (!empty($userName)||!empty($password)){
	$sql = "SELECT * FROM `users` WHERE `name` = 'mysql_real_escape_string($userName)' AND `pass` = 'mysql_real_escape_string($password)'";
	echo "<script type='text/javascript'>alert('$message');</script>";
	if (mysqli_query($connection, $sql) == 1){
		header('Location: register.html');
	}
}
//else {
//	header('Location: index.html');
//}

?>

<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Форма ввода</title>
		
		<link rel="stylesheet" href="styles/colors.css"/>	
		<script>	
		</script>
	</head>

	<body>
		<div id="main">
			<div id="strip_start" class="strip">SUPER NOTEBOOK</div>
		<form action="users_check.php">
			<div>
				<p></p>
				<input name="username" class="inputs" placeholder=" Username">
				<p></p>
				<p></p>
				<input name="password" class="inputs" type="password" placeholder=" Password">
				<p></p>
				<input type="submit" name="button" id="button_log" class="inputs" value="Login">
				<p></p>
				<input type="button" id="button_reg" class="inputs" value="Register" onclick="location.href='register.html'">
			</div>
			</form>
		<div id="strip_end" class="strip">Copyright by ..., 2016</div></div>
	</body>
	
</html>