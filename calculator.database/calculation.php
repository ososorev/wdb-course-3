<?php
    $result = "";
    $number1 = $_POST['number1'];
    $operator = $_POST['operator'];
    $number2 = $_POST['number2'];
    

        // if (!empty($_POST['number1'])) {
        //     $number1 = $_REQUEST["number1"];
        // }

        // if (!empty($_POST['operator'])) {
        //     $operator = $_REQUEST["operator"];
        // }

        // if (!empty($_POST['number2'])) {
        //     $number2 = $_REQUEST["number2"];
        // }

    function calculate ($number1, $number2, $operator) {
            $result = 0;
            if (empty($number1) || empty($number2)) {
                return 'Не переданы аргументы';
            }
            
            switch ($_POST['operator']) {
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
    echo $input_result;

    require_once("database.php");
    $database = new mydatabase ("localhost", "root",  "", "mybase");
    $database->query("INSERT INTO history (operand_1, operator, operand_2, result) VALUES ($number1, '$operator', $number2, $input_result)");
        
 
    ?>