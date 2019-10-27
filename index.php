<?php
if ($_GET["num1"])
{
    $x=$_GET["num1"];
    $y=$_GET["num2"];
    $operator=$_GET["operator"];

    if($operator=="+")
    {
        $res=$x+$y;
    }
    elseif($operator=="-")
    {
        $res=$x-$y;
    }
    elseif($operator=="*")
    {
        $res=$x*$y;
    }
    elseif($operator=="/")
    {
        $res=$x/$y;
    }
}
if(empty($x) && empty($y))
{
    $res = "Не все данные введены";
}
if(!empty($_REQUEST["res"]))
{
    $enter = "Результат: $res";
}

?>
<html>
    <head>
    </head>
        <body>
            <form >
            <input type="text" name="num1" placeholder="первое число">
            <select name="operator">
                <option value="+">+</option>
                <option value="-">-</option>
                <option value="*">*</option>
                <option value="/">/</option>
            </select>
            <input type="text" name="num2" placeholder="второе число">
            <input type="submit" name="res" value="Результат" />

            </form>
        <?php echo $enter?>
        </body>
</html>
<?php

?>

