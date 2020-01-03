<?php
require_once ('Class2.php');
$Id_user=$_COOKIE['session'];
$name=$_REQUEST["name"];//передача значений из NBook
$date=$_REQUEST["date"];//передача значений из NBook
$note=$_REQUEST["note"];//передача значений из NBook
$db = new dataBase("localhost", "root", "", "NBook");
$db->query("INSERT INTO `Note`(`name`, `date`, `note`, `User_id`) VALUES ('$name','$date','$note','$Id_user')");
$records = $db->Select_last_Note();
echo json_encode($records);
?>