<?php
    require_once ("functions.php");
    $number1 = $_REQUEST['number1'];
    $number2 = $_REQUEST['number2'];
    $operator = $_REQUEST['operator'];
    $calcRes = calculationResult($number1, $number2, $operator) ;
    $arrData = array(
        'number_1' => $number1,
        'number_2' => $number2,
        'result'=> $calcRes,
        'operator' => $operator
    );
    $arrWhat = array('number_1', 'number_2', 'result', 'operator');
    $db = new DataBase('localhost','root', '', 'calculation_archive');
    $db->insert('data', $arrData);
    $fiveLastRow = $db->select($arrWhat, 'data', 'id', 'DESC', 5);
    //echo  $fiveLastRow;
    echo "<div>Результат: ".$calcRes;"</div>".parseArrayToHtml($fiveLastRow);



