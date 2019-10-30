<?php
    require_once "calc.php";

    $a = $_REQUEST["a"];
    $b = $_REQUEST["b"];
    $s = $_REQUEST["s"];
    $result = calculator($a, $b, $s);
    echo "Ответ: ". $result;
?>