<?php
session_start();
$_SESSION['ses_username']= [];
$name = $_REQUEST ["name"];
$pass = $_REQUEST ["pass"];
if (!empty($name)&&!empty($pass)){
    $resultLogin = check();
	echo ($resultLogin);
}
else {
	$resultLogin = ("Enter login and password!");
	echo ($resultLogin);
};
function check() {
	global $name;
	global $pass;
	$connection = mysqli_connect("localhost", "root", "", "notebook");
	$sql = mysqli_query($connection, "Select id from regist where username = '$name' and password = MD5('$pass')");
		if ((mysqli_num_rows($sql))>0) {
			$resultLogin = ("Successful!");
			$row = mysqli_fetch_assoc($sql);
        	$_SESSION['ses_username']= $row["id"];
			}
		else {
			$resultLogin = ("Authorisation Error!");
		}
		return($resultLogin);
};
if ($resultLogin == "Successful!"){
	
	echo "<META HTTP-EQUIV='Refresh' content='1; URL=Notebook.php'>";
	exit(); 
}
?>
