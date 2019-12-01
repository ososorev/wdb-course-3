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
    $output = "Результат: " . $res;
    echo $output;

//    $save = mysqli_connect("localhost", "root", "", "db_calc");
//    $num1 = $_REQUEST["Num1"];
//    $operators = $_REQUEST["Opp"];
//    $num2 = $_REQUEST["Num2"];
//    $res = $_REQUEST["Res"];
//    mysqli_query($save, "INSERT INTO `calc`(`num1`, `operators`, `num2`, `res`) values ('$Num1','$Opp','$Num2','$Res')");

//    $resource = mysqli_query($save, "SELECT * FROM calc ORDER BY Id DESC LIMIT 5;");
//    $save = [];
//    foreach($resource as $row) {
//        $save[] = $row;
//        echo '<div>'.$row['num1'].' '.$row['opp'].' '.$row['num2'].' = '.$row['res'].'</div>';
//}

$output = mysqli_connect("localhost", "root", "", "db_calc");
$num1 = $_REQUEST["num1"];
$operators = $_REQUEST["operators"];
$num2 = $_REQUEST["num2"];
$result = $_REQUEST["res"];
mysqli_query($output, "INSERT INTO `calc`(`Num1`, `Opp`, `Num2`, `Res`) VALUES ('$num1','$operators','$num2','$res')");

$resource = mysqli_query($output, "SELECT * FROM calc ORDER BY id DESC LIMIT 5;");
$output = [];
foreach($resource as $row) {
    $output[] = $row;
    echo '<div>'.$row['num1'].' '.$row['operator'].' '.$row['num2'].' = '.$row['result'].'</div>';
}

?>