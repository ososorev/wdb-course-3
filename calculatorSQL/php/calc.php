<?php
function calculator($a, $b, $s) {
    if ($s==='+'){
        $result = $a + $b ;
    } else if($s==='-'){
        $result = $a - $b;
    } else if($s==='*'){
        $result = $a * $b;
    } else if($s==='/'){
        if ($b == 0){
            $result = "делить на 0 нельзя";
        } else {
            $result = $a / $b;
            // result=result.toFixed(5);
        }
    }
    return $result;
}
?>