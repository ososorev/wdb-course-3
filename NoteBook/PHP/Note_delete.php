<?php
require_once ('Class2.php');
$note_id=$_REQUEST["note_id"];
$db = new dataBase("localhost", "root", "", "NBook");
$record = $db->Delete_note($note_id);
echo $record;
?>