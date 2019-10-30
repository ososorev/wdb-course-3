<?php
                $result = "";
                $number1 = $_GET['number1'];
                $operator = $_GET['operator'];
                $number2 = $_GET['number2'];
            

                if (!empty($_GET['number1'])) {
                    $number1 = $_REQUEST["number1"];
                }

                if (!empty($_GET['operator'])) {
                    $operator = $_REQUEST["operator"];
                }

                if (!empty($_GET['number2'])) {
                    $number2 = $_REQUEST["number2"];
                }

                // if (empty($_GET['number1']) || empty($_GET['number2'])) {
                //     echo 'Не переданы аргументы';
                // }
       

    if(isset($_GET['resultButton'])) {   

            function calculate ($number1, $number2, $operator) {
                    $result = 0;

                    switch ($_GET['operator']) {
                        case 'multiply': // if operator.value = multiply
                            $result = $number1 * $number2;
                            break;

                        case 'divide': // if operator.value = divide
                            if ($number2 === 0) {
                                echo ('Error: you cannot divide by 0');
                                break;
                            } 
                                $result = $number1 / $number2;
            
                            break;

                        case 'sumUp': // if operator.value = sumUp
                            $result = $number1 + $number2;
                            break;

                        case 'subtract': // if operator.value = subtract
                            $result = $number1 - $number2;
                            break;
                    }

                    return $result;
                }

                $input_result = calculate($number1, $number2, $operator);
            }
        
 
    ?>