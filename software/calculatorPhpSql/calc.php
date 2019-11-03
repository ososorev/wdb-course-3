<?php

function calculator($numberOne, $numberTwo, $operation) {
    $result="";
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
        if ($numberTwo !== "0") {
            $result = round(($numberOne / $numberTwo), 2);
        } else {
            $result = "Введите корректные данные";
        }
    }
    return $result;
}

// echo "<script>alert("Введите корректные данные");</script>";
