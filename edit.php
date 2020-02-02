<?php 
$connection = mysqli_connect("localhost", "root", "", "notebook");
$json_str = file_get_contents('php://input');
$json_obj = json_decode($json_str);
$id= $json_obj->{'save'};
$recordTitle= $json_obj->{'recordTitle'};
$editDate= $json_obj->{'editDate'};
$contents= $json_obj->{'contents'};
mysqli_query($connection, "UPDATE diary SET recordTitle='$recordTitle',editDate='$editDate',contents='$contents' WHERE id = '$id'");
?>