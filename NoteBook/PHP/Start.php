<?php
require_once ('Class2.php');
$Id_user=$_COOKIE['session'];
$db = new dataBase("localhost", "root", "", "NBook");
$records = $db->fetch($Id_user);
echo json_encode($records, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES | JSON_NUMERIC_CHECK);
?>