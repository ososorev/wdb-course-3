<?php
	$connection= mysqli_connect("localhost", "root", "", "database");
	$userName=$_REQUEST['username'];
	$password=$_REQUEST['password'];
	$message = "SUPER NOTEBOOK";

if (!empty($userName)||!empty($password)){
	$res = mysqli_query($connection, "SELECT id FROM users WHERE name = '$userName' AND password = '$password'");
	$row = mysqli_fetch_assoc($res);
	if (!empty($row['id'])){
		echo "<META HTTP-EQUIV='Refresh' content='2; URL=notebook.html'>";
        exit();
	}
	else{
		$message = "Неверный логин или пароль";
	}
}

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
			<div id="strip_start" class="strip">
<?php echo($message) ?>
			</div>
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