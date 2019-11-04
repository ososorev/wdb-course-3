<?php

function calculator($numberOne, $numberTwo, $operation) {
    $result="";
    $error = "Введите корректные данные";
    if ($operation === "+") {
        $result = $numberOne + $numberTwo;
    }
    else if ($operation === "-") {
        $result = $numberOne - $numberTwo;
    }
    else if ($operation === "*") {
        $result = $numberOne * $numberTwo;
    }
    else if ($operation === "/") {
        if ($numberTwo == 0) {
            $result = $error;
        } else {
            $result = round(($numberOne / $numberTwo), 2);
        }
    }
    return $result;
}

// echo "<script>alert("Введите корректные данные");</script>";
