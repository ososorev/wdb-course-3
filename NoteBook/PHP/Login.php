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
        setcookie('session', $record['id'], time()+3600,'/');
        echo '1';
}
}
?>
