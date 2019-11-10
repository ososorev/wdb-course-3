<?php

if (!empty($_GET["num1"]) && !empty($_GET["num2"]))
{
    $num1=$_GET["num1"];
    $num2=$_GET["num2"];
    $operator=$_GET["operator"];

    if($operator=="+")
    {
        $res=$num1+$num2;
    }
    elseif($operator=="-")
    {
        $res=$num1-$num2;
    }
    elseif($operator=="*")
    {
        $res=$num1*$num2;
    }
    elseif($operator=="/")
    {
        $res=$num1/$num2;
    }
    
}
elseif(empty($_GET["num1"]) || empty($_GET["num2"]))
{
    $res = "Не все данные введены";
}
$connection=mysqli_connect("localhost", "root", "", "calcsql");
    mysqli_query($connection,
        "INSERT INTO `infcalc` (`num1`, `num2`, `operator`, `result`)
         VALUES ( '$num1', '$num2', '$operator', '$res')");
    $answer = mysqli_query($connection, "SELECT * FROM `infcalc` ORDER BY id DESC LIMIT 5");
    $mass=[];
    foreach($answer as $mass1)
    {
        $mass[]=$mass1;
    }   
$enter = "Результат: $res";
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
            
        <?php echo $enter;
        echo "<pre>";
        print_r($mass);
        echo"</pre>";
        ?>
        
        </body>
</html>
<?php

?>

