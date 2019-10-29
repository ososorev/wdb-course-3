<?php

if(
    isset($_REQUEST['num1']) && is_numeric ($_REQUEST['num1']) &&
    isset($_REQUEST['num2']) && is_numeric ($_REQUEST['num2'])
) {
    $num1 = $_REQUEST['num1'];
    $num2 = $_REQUEST['num2'];
    $operator = $_REQUEST['operator'];
    if ($operator) {
        if ($operator == "+") {
            $res = $num1 + $num2;
        } else if ($operator == "-") {
            $res = $num1 - $num2;
        } else if ($operator == "*") {
            $res = $num1 * $num2;
        } else if ($operator == "/") {
            $res = ($num2 != 0) ? $num1 / $num2 : "Infinity";
        }
    }
}
    $output = "Результат: " . $res;
    echo $output;

?>