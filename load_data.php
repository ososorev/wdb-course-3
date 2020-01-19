<?php
$connection = mysqli_connect("localhost", "root", "", "notebook"); // подключение к БД
$sql = mysqli_query($connection, "SELECT id, recordTitle, editDate, contents FROM diary"); // форрмируется запрос к таблице
$json = [];
while($row = mysqli_fetch_array($sql)) { // последовательно складываем в переменную $row которая является массивом строки результата запроса
$json[] = $row; // преобразование в JSON массив
}
echo json_encode($json);
?>