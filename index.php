<?php 
$connection = mysqli_connect("localhost", "root", "", "registration");
$name = $_REQUEST ["name"];
$pass = $_REQUEST ["pass"];

if (!empty($name)&&!empty($pass)){
    $sql = mysqli_query($connection, "Select id from regist where username = '$name' and password = MD5('$pass')");
	};

function check() {
		if (mysqli_num_rows($sql) > 0) {
			print "Верно";
		}
		else {
			print "Ошибка авторизации";
		}
};
?>
<!doctype html>
<html>
	<head>
		<title>Notebook</title>
		<link rel="stylesheet" href="styles.css"/>
	</head>
	<body>
		<form>
		<center>
			<div class="heading">SUPER NOTEBOOK</div>
			<br>
			<br>
			<input type="string" class="class_input" id="name" placeholder="Username">
			<br>
			<input type="password" class="class_input" id="pass" placeholder="Password">
			<br>
			<input type="submit" class="link" name="login" value="Login" onClick="check()">
			<p>
			<a type="submit" class="link" href="register.html">Register</a>
			</p>
			<div class="copyright">Copyright by..., 2016</div>
		</center>
		</form>
	</body>
</html>