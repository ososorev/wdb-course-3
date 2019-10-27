<?php
function calculator() {
    $a = $_REQUEST["a"];
    $b = $_REQUEST["b"];
    $s = $_REQUEST["s"];
    if ($s==='+'){
        $result = $a + $b ;
    } else if($s==='-'){
        $result = $a - $b;
    } else if($s==='*'){
        $result = $a * $b;
    } else if($s==='/'){
        if ($b == 0){
            $result = "Ответа нет";
        } else {
            $result = $a / $b;
            // result=result.toFixed(5);
        }
    }
    return $result;
}
$result = calculator();
?>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Калькулятор</title>
        <link rel="stylesheet" href="../style/style.css">
    </head>
    <body>
        <div class="block">
            <form /*action="calculator.php"*/ id="forma">
                <label class="vvod"> Первое число 
                    <input class="parametr raz a" name="a" type="number" required 
                    min="-999" max="999" title="Число от -999 до 999" placeholder="введите число А"/>
                </label>
                <select class="operationSelect" name="s">
                    <option>+</option>
                    <option>-</option>
                    <option>*</option>
                    <option>/</option>
                </select>
                <label class="vvod"> Второе число 
                    <input class="parametr raz b" name="b" type="number" required 
                    min="-999" max="999" title="Число от -999 до 999" placeholder="введите число Б"/>
                </label>
                <div class="dop">
                    <button type="submit"  class="button">
                        Посчитать
                    </button>
                </div>
                <div class="otvet">
                    Ответ: <?php echo $result?>
                </div>
            </form>
        </div>
    </body>
</html>