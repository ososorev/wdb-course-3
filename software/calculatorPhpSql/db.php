<?php

function databaseConnection() {
    return mysqli_connect("localhost", "root", "", "calculate");
}

function query($sql) {
    return mysqli_query(databaseConnection(), $sql);
}

function checkingUniquenessOfLastExample($inputOne, $operation, $inputTwo) {
    $resource = query("SELECT first_operand, operation, second_operand FROM calc ORDER BY id_calc DESC LIMIT 1");
    $prev = [];
    foreach ($resource as $row) {
        $prev[] = $row;
    }
    if ($prev[0]['first_operand'] != $inputOne || $prev[0]['operation'] != $operation ||
        $prev[0]['second_operand'] != $inputTwo) {
        return true;
    } else {
        return false;
    }
}

function databaseInsert($inputOne, $operation, $inputTwo, $result) {
    if (checkingUniquenessOfLastExample($inputOne, $operation, $inputTwo)) {
        query("INSERT INTO calc(first_operand, operation, second_operand, result)
        VALUES ('$inputOne', '$operation', '$inputTwo', '$result')");
    }
}

function databaseRowPrint($arr, $index) {
    if ($arr[$index]['operation'] === '/' ) {
        $arr[$index]['operation'] = '\\';
    }
    $row = $arr[$index]['first_operand']." ".$arr[$index]['operation']." ".$arr[$index]['second_operand'].
        " = ".$arr[$index]['result']."<br />";
    return $row;
}

// not used
function databasePrint($arr) {
    for ($i = 0; $i <= 4; $i++) {
        databaseRowPrint($arr, $i);
    }
}

// not used
function databaseValue($arr) {
    foreach ($arr as $index => $row) {
        foreach ($row as $value) {
            echo $value;
        }
    }
    return $value;
}

function databaseSelect() {
    $resource = query("SELECT first_operand, operation, second_operand, result 
      FROM calc ORDER BY id_calc DESC LIMIT 5");
    $calc = [];
    $print = '';
    foreach ($resource as $i => $row) {
        $calc[] = $row;
        $print = $print.databaseRowPrint($calc, $i);
    }
    echo $print;
}
