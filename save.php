<?php 
$recordTitle = $_REQUEST ["recordTitle"];
$editDate = $_REQUEST ["editDate"];
$contents = $_REQUEST ["contents"];

$connection = mysqli_connect("localhost", "root", "", "notebook");
mysqli_query($connection, "INSERT INTO diary(recordTitle, editDate, contents) VALUES ('$recordTitle', '$editDate', '$contents')");

if ($result = "Note saved successfully!"){
	echo ($result);
	echo "<META HTTP-EQUIV='Refresh' content='0.5; URL=notebook.php'>";
	exit(); 
} 
?>