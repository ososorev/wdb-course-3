<?php
  $number1=$_REQUEST["first-number"];
  $number2=$_REQUEST["second-number"];
  $operation = $_REQUEST["option"];
  if (is_numeric($number1) && is_numeric($number2)){
    if ($operation === "+"){
      $result = $number1 + $number2;
    }elseif($operation === "-"){
      $result = $number1 - $number2;
    }elseif($operation === "*"){
      $result = $number1 * $number2;
    }elseif($operation === "/" && $number2==0){
      $result = "Деление на ноль";
    }else {
      $result = $number1 / $number2;
    }
  }
  echo($result);
?>