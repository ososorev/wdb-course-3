<?php

function databaseConnection() {
    $connection = mysqli_connect("localhost", "root", "", "calculate");
    return $connection;
}

function databaseInsert($inputOne, $operation, $inputTwo, $result) {
    if ([0]['first_operand'] === $inputOne && [0]['operation'] === $operation && [0]['second_operand'] === $inputTwo
        && [0]['result'] === $result) {
        die();
    } else {
        mysqli_query(databaseConnection(), "INSERT INTO calc(first_operand, operation, second_operand, result)
        VALUES ('$inputOne', '$operation', '$inputTwo', '$result')");
    }
    return;
}

function databaseRowPrint($arr, $index) {
    $row = $arr[$index]['first_operand']." ".$arr[$index]['operation']." ".$arr[$index]['second_operand'].
        " = ".$arr[$index]['result']."<br />";
    return print_r($row);
}

function databasePrint($arr) {
    for ($i = 0; $i <= 4; $i++) {
        databaseRowPrint($arr, $i);
    }
    return;
}

function databaseValue($arr) {
    foreach ($arr as $index => $row) {
        foreach ($row as $value) {
            echo $value;
        }
    }
    return $value;
}

function databaseSelect() {
    $resource = mysqli_query(databaseConnection(), "SELECT * FROM calc ORDER BY created DESC LIMIT 5");
    $calc = [];
    foreach ($resource as $row) {
        $calc[] = $row;
    }
    for ($i = 0; $i <= 4; $i++) {
        $print = databaseRowPrint($calc, $i);
    }
    return $print;
}
