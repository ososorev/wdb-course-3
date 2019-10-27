<?php
    // header ("Content-Type: text/html; charset=utf-8");
    require_once "calc.php";

    $inputOne=$_REQUEST["inputOne"];
    $inputTwo=$_REQUEST["inputTwo"];
    $operation=$_REQUEST["operation"];
    $button=$_REQUEST["button"];
    $result="";
    if (!empty($inputOne) && !empty($inputTwo)) {
        if (!empty($button)) {
            $result=calculator($inputOne, $inputTwo, $operation);
        } else {
            ?>
            <!DOCTYPE html>
            <html>
                alert("Если данные введены корректно, нажмите Выполнить");
            </html>
            <?php
        }
    } else {
        ?>
        <!DOCTYPE html>
        <html>
            alert("Введите входные данные");
        </html>
        <?php
    }
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="stylePhp.css">
        <title>Calculator</title>
        <!-- <script src="mainPhp.js"></script> -->
    </head>
    <body>
        <div class="mainContainer">
            <form id="forma" onsubmit="return false">
                <div class="inputString">
                    <label class="inputLabel" for="inputOne">Первое число
                        <input type="number" required min="-999" max="999" name="inputOne"
                               placeholder="ххх" id="inputOne" class="inputField numberOne raz">
                    </label>
                    <label class="operationLabel">Oперация
                        <select class="operationSelect" name="operation">
                            <option class="operation">+</option>
                            <option class="operation">-</option>
                            <option class="operation">*</option>
                            <option class="operation">/</option>
                        </select>
                    </label>
                    <label class="inputLabel" for="inputTwo">Второе число
                        <input type="number" required min="-999" max="999" name="inputTwo"
                               placeholder="ххх" id="inputTwo" class="inputField numberTwo raz">
                    </label>
                </div>
                <input class="buttonCalc" type="submit" name="button" value="Вычислить"/>
                <!-- <div class="output" name="result" /> -->
            </form>
            <span class="outputLabel">Результат:</span>
            <div class="output"><?php echo $result; ?></div>
        </div>
    </body>
</html>

<!-- http://localhost/calculatorPHP/index.php -->
