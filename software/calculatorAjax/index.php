<?php
    header ("Content-Type: text/html; charset=utf-8");
    require_once "calc.php";

    $inputOne=$_REQUEST["inputOne"];
    $inputTwo=$_REQUEST["inputTwo"];
    $operation=$_REQUEST["operation"];
    $button=$_REQUEST["button"];
    $result="";
    if (!empty($inputOne) && !empty($inputTwo)) {
        if (!empty($button)) {
            $result=calculator($inputOne, $inputTwo, $operation);
        }
    }
