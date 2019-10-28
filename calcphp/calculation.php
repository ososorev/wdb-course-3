<?php
   //echo $_REQUEST['number1'],$_REQUEST['number2'],$_REQUEST['operator'];
if(!is_null($_REQUEST['button_one'])) {
    $number1 = $_REQUEST['number1'];
    $number2 = $_REQUEST['number2'];
    $operator = $_REQUEST['operator'];

    if (is_numeric($number1) && is_numeric($number2)) {
        switch ($operator) {
            case '+':
                $result = $number1 + $number2;
                break;
            case '-':
                $result = $number1 - $number2;
                break;
            case '/':
                $result = ($number2 == 0) ? "На ноль делить низя." : $number1 / $number2;
                break;
            case '*':
                $result = $number1 * $number2;
                break;
        }
    } else {
        $result = "Похоже вы ввели не числа...";
    }
    $result = "Результат: " . $result;
}

    ?>



