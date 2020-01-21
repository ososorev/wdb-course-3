<?php 
$id = $_REQUEST ["id"];

$connection = mysqli_connect("localhost", "root", "", "notebook");
mysqli_query($connection, "DELETE FROM diary WHERE id='$id'");
mysqli_query($connection, "INSERT INTO diary(id, recordTitle, editDate, contents) VALUES ('$id', '$recordTitle', '$editDate', '$contents')");

if ($result = "Note edited successfully!"){
	echo ($id);
	echo "<META HTTP-EQUIV='Refresh' content='0.5; URL=notebook.php'>";
	exit(); 
}
?>