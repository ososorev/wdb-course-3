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
function addToDataBase($number_1, $number_2, $result, $operator){
    $connection = connectDataBase('calculation_archive');
    mysqli_query($connection,
        "INSERT INTO data(number_1, number_2, result, operator) 
                VALUES ('$number_1','$number_2','$result', '$operator')");
}

function connectDataBase($nameDataBase){

    return $connection = mysqli_connect('localhost','root','', $nameDataBase);
}

function addCorrectResultToDb($number_1, $number_2, $result, $operator){
    if(is_numeric($result)){
        addToDataBase($number_1, $number_2, $result, $operator);
    }
}

function fiveLastStr(){
    $connection = connectDataBase('calculation_archive');
    $resultSelect = mysqli_query($connection,"SELECT * FROM data ORDER BY id DESC LIMIT 5;");
    foreach ($resultSelect as $row){
        $result = $result.'<div>'.$row['number_1'].' '.$row['operator'].' '.$row['number_2'].' = '.$row['result'].'</div>';
    }
    return $result;
}

