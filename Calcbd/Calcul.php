<?php
    $num1 = $_REQUEST['num1'];
    $num2 = $_REQUEST['num2'];
    $operators = $_REQUEST['operators'];
   
    if ($num1==null or $num2==null){
        $res="Введите числа...";
    }
    elseif ($operators=="+"){
        $res=$num1+$num2;
    }
    elseif ($operators=="-"){
        $res=$num1-$num2;
    }    
    elseif ($operators=="*"){
        $res=$num1*$num2;
    }
    elseif ($operators=="/"){
        $res=$num1/$num2;
    }
    $output = "Результат: " . $res .'<br>';
    echo $output;

$link = mysqli_connect("localhost", "root", "", "db_calc");
$num1 = $_REQUEST["num1"];
$operators = $_REQUEST["operators"];
$num2 = $_REQUEST["num2"];
$result = $_REQUEST["res"];
mysqli_query($link, "INSERT INTO `calc`(`Num1`, `Opp`, `Num2`, `Res`) VALUES ('$num1','$operators','$num2','$res')");

$query="SELECT * FROM calc ORDER BY Id DESC LIMIT 5";

$resourse = mysqli_query($link, $query);
if($resourse)
{
    $rows = mysqli_num_rows($resourse);
     
    echo '<br>'.'История результатов:'.'<br>';
    for ($i = 0 ; $i < $rows ; ++$i)
    {
        $row = mysqli_fetch_row($resourse);
        echo "<br>";
            for ($j = 0 ; $j < 1 ; ++$j) echo $row[1].$row[2].$row[3]. "=" .$row[4];    
    }
     
}

?>