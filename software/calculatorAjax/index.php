<?php
    header ("Content-Type: text/html; charset=utf-8");
    require_once "calc.php";

    $inputOne=$_REQUEST["inputOne"];
    $inputTwo=$_REQUEST["inputTwo"];
    $operation=$_REQUEST["operation"];
    $button=$_REQUEST["button"];
    if (!!isset($inputOne) && !!isset($inputTwo)) {
        echo calculator($inputOne, $inputTwo, $operation);
//    } elseif (!isset($button)) {
//        echo "Введите входные данные"; // не работает((
    }
