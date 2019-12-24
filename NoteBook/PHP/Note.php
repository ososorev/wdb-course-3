<?php
require_once ('Class2.php');
$name=$_REQUEST["name"];//передача значений из NBook
$date=$_REQUEST["date"];//передача значений из NBook
$note=$_REQUEST["note"];//передача значений из NBook
/*if ($name==''||$date==''||$note==''){
      echo json_encode {'name': 'note_id'}; //проверка введены ли пользовательские данные
      exit();
  }*/
$db = new dataBase("localhost", "root", "", "NBook");
$db->query("INSERT INTO `Note`(`name`, `date`, `note`) VALUES ('$name','$date','$note')");
$records = $db->Select_last_Note();
echo json_encode($records);
?>