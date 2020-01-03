<?php
require_once ('Class2.php');
$note_id=$_REQUEST["note_id"];
$db = new dataBase("localhost", "root", "", "NBook");
$record = $db->Select_note($note_id);
echo json_encode($record);
//echo $note_id;
?>