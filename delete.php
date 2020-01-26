<?php 
$id = $_REQUEST ["id"];

$connection = mysqli_connect("localhost", "root", "", "notebook");
mysqli_query($connection, "DELETE FROM diary WHERE id=$id");

if ($result = "Note deleted successfully!"){
	echo ($result);
	echo "<META HTTP-EQUIV='Refresh' content='0; URL=notebook.php'>";
	exit(); 
}
?>