<?php
require_once ("Class2.php");
$user=$_REQUEST["user"];//передача значений из Login
$psw=$_REQUEST["psw"];//передача значений из Login
$db = new dataBase("localhost", "root", "", "NBook");

$records = $db->Select();
foreach($records as $record) 
{
    if ($user==$record['Name']) //проверка, есть ли имя в базе
       if ($psw==$record['Password'])
      {
        echo '1'; //если есть имя в базе то выводится 1, если нет пустое значение
}
}
?>