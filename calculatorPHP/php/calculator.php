<?php
function calculator() {
    $a = $_REQUEST["a"];
    $b = $_REQUEST["b"];
    $s = $_REQUEST["s"];
    if ($s==='+'){
        $result = "Ответ: " +$a + +$b ;
    } else if($s==='-'){
        $result = "Ответ: " $a - $b;
    } else if($s==='*'){
        $result = "Ответ: " $a * $b;
    } else if($s==='/'){
        if ($b == 0){
            alert("делить на 0 нельзя");
            $result = "Ответа нет";
        } else {
            $result = "Ответ: " $a / $b;
            // result=result.toFixed(5);
        }
    }
    return = $result;
}

?>
