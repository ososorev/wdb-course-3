<?php
    require_once("functions.php");
    if (!isset($_SESSION))
    {
        session_start();
    }

    $number1 = $_REQUEST['number1'];
    $number2 = $_REQUEST['number2'];
    $operator = $_REQUEST['operator'];
    $calcRes = calculationResult($number1,$number2,$operator) ;
    echo addCorrectResultToSession($number1,$number2, $calcRes, $operator);
    echo "<div>Результат: ".$calcRes."</div>".fiveLastStr();




