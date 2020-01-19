<?php 
$id = $_REQUEST ["id"];

$connection = mysqli_connect("localhost", "root", "", "notebook");
mysqli_query($connection, "DELETE FROM diary WHERE id=$id");

if ($result = "Successful!"){
	echo ($id);
	exit(); 
}
?>