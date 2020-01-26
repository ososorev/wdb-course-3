<?php 
$id = $_REQUEST ["id"];
$recordTitle = $_REQUEST ["recordTitle"];
$editDate = $_REQUEST ["editDate"];
$contents = $_REQUEST ["contents"];

$connection = mysqli_connect("localhost", "root", "", "notebook");
mysqli_query($connection, "DELETE FROM diary WHERE id=$id");
mysqli_query($connection, "INSERT INTO diary(recordTitle, editDate, contents) VALUES ('$recordTitle', '$editDate', '$contents')");

if ($result = "Note edited successfully!"){
	echo $result;
	echo "<META HTTP-EQUIV='Refresh' content='0; URL=notebook.php'>";
	exit(); 
}
?>