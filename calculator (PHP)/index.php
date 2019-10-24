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
                //     return 'Не переданы аргументы';
                // }
       

                if(isset($_GET['resultButton'])) {

            // Enter the code you want to execute after the form has been submitted
            // Display Success or Failure message (if any)
          

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
                // onSubmit('resultButton').addEventListener('click', operate)  
            }
 
    ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link href="style.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&display=swap&subset=cyrillic" rel="stylesheet">
    <title>Calculator</title>
</head>

<body>

    <form method="get" attribute="get">
    <div name="form" class="form">

        <h1 class="calculator">Calculator</h1>
               
        <div class="description">
            <h2 class="description-text">
                Here you see the example of php calculator
            </h2>
        </div>

            <div name="inputs" class="inputs">
                <input type="number" name="number1" class="number1" placeholder="Enter number here" required>
                

                <select name="operator" size="1">
                    <option value="multiply">*</option>
                    <option value="divide">:</option>
                    <option value="sumUp">+</option>
                    <option value="subtract">-</option>

                </select>
                
                <input type="number" name="number2" placeholder="Enter number here" required>
                <input type="submit" name="resultButton" class="resultButton" value="=">
                <input name="result" disabled=true value="<?php echo $input_result; ?>"></input>
         </form>
            </div>

        

</body>

</html>