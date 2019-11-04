<?php
    $n1 = $_POST['n1'];
    $n2 = $_POST['n2'];
    $oper = $_POST['oper'];
        

    if ($_POST['oper']){
        if ($oper=="+"){
            $result=$n1+$n2;
            }
        elseif ($oper=="-"){
            $result=$n1-$n2;
           }
        elseif ($oper=="*"){
            $result=$n1*$n2;
           }
        elseif ($oper=="/"){
            $result=$n1/$n2;
           }
        echo $result;
    }      
?>