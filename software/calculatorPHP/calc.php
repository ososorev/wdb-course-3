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
            $result = $numberOne / $numberTwo;
        } else {
            ?>
            <!DOCTYPE html>
            <html>
                alert("Введите корректные данные");
            </html>
            <?php
        }
    }
    return $result;
}

// echo "<script>alert("Введите корректные данные");</script>";
