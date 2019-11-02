<?php

$connection = mysqli_connect("localhost", "root", "");
mysqli_query($connection, "INSERT INTO calc(first_operand, operation, second_operand, result)
  VALUES ('$inputOne', '$operation', '$inputTwo', '$result')");
$resourse = mysqli_query($connection, "SELECT * FROM calc ORDER BY created DESC LIMIT 5;");
$calc = [];
foreach ($resourse as $row) {
    $calc[] = $row;
}
// echo $row["result"];