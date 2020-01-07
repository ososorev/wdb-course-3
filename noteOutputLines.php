<?php
$connection = mysqli_connect("localhost", "root", "", "notebook"); // подключение к БД
$sql= "SELECT recordTitle, editDate FROM diary"; // форрмируем запрос к таблице
$res=mysqli_query($sql); //выполняем данный запрос
while($row=mysqli_fetch_array($res)) // последовательно складываем в переменную $row которая является массивом строки результата запроса
echo $row; // выводим строку на страницу
?>

<!--
$result = mysql_query("SELECT * FROM trans"); 
while($myrow = mysql_fetch_assoc($result)) {  
}
-->