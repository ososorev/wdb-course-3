<?php
    require_once("calculation.php");
?>
<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="style.css">
    <script src="calc.js"></script>
</head>
<body>
<div class="page">
    <div class="content">
        <h1 class="h1_one">Это классный калькулятор!</h1>
        <form>
            <div class="calc_container">
                <input type="text" name="number1" placeholder="Введите число 1"  class="input_number">
                <select name="operator" class="input_number">
                    <option>+</option>
                    <option>-</option>
                    <option>/</option>
                    <option>*</option>
                </select>
                <input type="text" name="number2" placeholder="Введите число 2"  class="input_number">
            </div>
        <input type="submit" name="button_one" class="button_one" value="Считать">
        </form>
        <div class="result_cont">
            <div id="result">
                <?
                    echo $result;
                ?>
            </div>
        </div>
    </div>
</div>
</body>
</html>