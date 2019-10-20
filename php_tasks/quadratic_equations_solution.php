<?php

$x = get_result(7,-34,22);
echo ("$x[0] and $x[1]");

// Алгоритм решения уравнений вида ax2 + bx + c = 0

function get_discriminant ($number_a, $number_b, $number_c) {
    $discriminant = pow($number_b,2) - 4*$number_a*$number_c;
    return $discriminant;
}

function get_result ($number_a, $number_b, $number_c) {
    if ($number_a === 0) {
        echo ("a must not be 0");
        return;
    }

    // elseif check_numbers = ($number_a, $number_b, $number_c);
    // foreach 

    elseif (is_numeric($number_a) && is_numeric($number_b) && is_numeric($number_c)) {
        
            $discriminant = get_discriminant($number_a, $number_b, $number_c);
            
            if ($discriminant == 0) {
                $result_1 = - $number_b/2*$number_a;
                $result_2 = null;
            }

            elseif($discriminant > 0) {
                $result_1 = (-$number_b + sqrt($discriminant))/(2*$number_a);
                $result_2 = (-$number_b - sqrt($discriminant))/(2*$number_a);

            }
            
            else {
                echo ("The equation has no roots");
                return;
            }
    
    }
    
    else {
        echo ("Error: a, b and c must be numbers");
        return;
    }

return array($result_1, $result_2);

}
?>