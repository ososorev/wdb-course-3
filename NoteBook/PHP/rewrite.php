<?php
/*require_once ('Class2.php');
$note_id=$_REQUEST["note_id"];
$note=$_REQUEST["note"];
$date=$_REQUEST["date"];
$name=$_REQUEST["note_name"];
//$name=$_REQUEST["name"];
$db = new dataBase("localhost", "root", "", "NBook");
$record = $db->Update($note_id,$note,$date,$name);
echo json_encode($record);
//echo $note;
//echo $note_id;
//echo $date;
//echo $name;*/

require_once ('Class2.php');
$note_id=$_REQUEST["note_id"];
$note=$_REQUEST["note"];
$date=$_REQUEST["date"];
$name=$_REQUEST["note_name"];
$db = new dataBase("localhost", "root", "", "NBook");
$record = $db->Update($note_id,$note,$date,$name);
echo json_encode($record);
?>