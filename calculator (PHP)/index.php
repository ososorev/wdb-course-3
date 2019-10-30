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
    <?php require_once("calculation.php"); ?> 
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