<?php

    function calculationResult($number1,$number2,$operator){
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
        return $result;
    }
function addToSessionArray($number_1, $number_2, $result, $operator){

        $row = ['number_1' => $number_1,
           'number_2' => $number_2,
           'operator' => $operator,
           'result' => $result];
        $_SESSION[] =  $row;
}



function addCorrectResultToSession($number_1, $number_2, $result, $operator){
        if(is_numeric($result)){
            addToSessionArray($number_1, $number_2, $result, $operator);
        }
}

function fiveLastStr(){
    $result = null;
    foreach ($_SESSION as $i=>$row){
        $result = $result.$i.'<div>'.$row['number_1'].' '.$row['operator'].' '.$row['number_2'].' = '.$row['result'].'</div>';
    }
    return $result;
}

