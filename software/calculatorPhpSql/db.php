<?php

function database($inputOne, $operation, $inputTwo, $result) {
    $connection = mysqli_connect("localhost", "root", "", "calculate");
    mysqli_query($connection, "INSERT INTO calc(first_operand, operation, second_operand, result)
      VALUES ('$inputOne', '$operation', '$inputTwo', '$result')");
    /*$resource = mysqli_query($connection, "SELECT * FROM calc ORDER BY created DESC LIMIT 5");
    $calc = [];
    foreach ($resource as $row) {
        $calc[] = $row;
    }
    return $row; // $calc;*/
}
