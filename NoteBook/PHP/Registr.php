<?php
require_once ('Class2.php');
$user=$_REQUEST["user"];//передача значений из registr
$Password=$_REQUEST["Password"];//передача значений из registr
$Pass_con=$_REQUEST["Pass_con"];//передача значений из registr
$Email=$_REQUEST["Email"];
$db = new dataBase("localhost", "root", "", "NBook");

if ($user==''||$Password==''||$Email==''){
  //echo $user;
  //echo $Password;
  //echo $Email;
    echo '1'; //проверка введены ли пользовательские данные
    exit();
}

if ($Password!==$Pass_con){
    echo '2'; // проверка на совпадение пароля
    exit();
}

$records = $db->Select();
foreach($records as $record) 
{
    if ($Email==$record['Email']){
    $calc=1;
}
}
If ($calc!==1){
    $db->query("INSERT INTO `Login`(`name`, `Password`, `Email`) VALUES ('$user','$Password','$Email')");
    echo ''; // если условия соблюдены, запись в БД
}
else echo '3'; // если такой @mail уже зарегистрирован

//echo $Name;
//echo $Password;
//echo $Email;
?>