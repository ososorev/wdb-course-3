<?php

function databaseConnection() {
    $connection = mysqli_connect("localhost", "root", "", "calculate");
    return $connection;
}

function databaseInsert($inputOne, $operation, $inputTwo, $result) {
    $resource = mysqli_query(databaseConnection(), "SELECT * FROM calc ORDER BY created DESC LIMIT 1");
    $last = [];
    foreach ($resource as $row){$last[] = $row;};
    if ($last[0]['first_operand'] == $inputOne && $last[0]['operation'] == $operation &&
        $last[0]['second_operand'] == $inputTwo && $last[0]['result'] == $result) {
        return;
    } else {
        mysqli_query(databaseConnection(), "INSERT INTO calc(first_operand, operation, second_operand, result)
        VALUES ('$inputOne', '$operation', '$inputTwo', '$result')");
    }
    return;
}

function databaseRowPrint($arr, $index) {
    if ($arr[$index]['operation'] === '/' ) {
        $arr[$index]['operation'] = '\\';
    }
    $row = $arr[$index]['first_operand']." ".$arr[$index]['operation']." ".$arr[$index]['second_operand'].
        " = ".$arr[$index]['result']."<br />";
    return $row;
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
    $print = '';
    foreach ($resource as $i => $row) {
        $calc[] = $row;
        $print = $print.databaseRowPrint($calc, $i);
    }
    echo $print;
}
