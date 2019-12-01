<?php
    $num1=$_REQUEST['num1'];
    $num2=$_REQUEST['num2'];
    $operators=$_REQUEST['operators'];
   
    if ($num1==null or $num2==null){
        $res="Введите числа...";
    }
    elseif ($operators=="+"){
        $res=$num1+$num2;
    }
    elseif ($operators=="-"){
        $res=$num1-$num2;
    }    
    elseif ($operators=="*"){
        $res=$num1*$num2;
    }
    elseif ($operators=="/"){
        $res=$num1/$num2;
    }
    echo $res;
?>