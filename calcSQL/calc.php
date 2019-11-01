<?php
$num1 = $_REQUEST['num1'];
$num2 = $_REQUEST['num2'];
$operator = $_REQUEST['operator'];
if (is_numeric($num1) && is_numeric($num2)) {
    switch ($operator) {
        case '+':
            $res = $num1 + $num2;
            break;
        case '-':
            $res = $num1 - $num2;
            break;
        case '/':
            $res = ($num2 == 0) ? "Вы делите на ноль" : $num1 / $num2;
            break;
        case '*':
            $res = $num1 * $num2;
            break;
    }
} else {
    $res = "Данные введены некорректно, попробуйте еще раз";
}
$output = "Результат: " . $res;
echo $output;

$output = mysqli_connect("localhost", "root", "", "calc");
$num1 = $_REQUEST["num1"];
$operator = $_REQUEST["operator"];
$num2 = $_REQUEST["num2"];
$result = $_REQUEST["res"];
mysqli_query($output, "INSERT INTO `output`(`num1`, `operator`, `num2`, `result`) VALUES ('$num1','$operator','$num2','$res')");

$resource = mysqli_query($output, "SELECT * FROM output ORDER BY id DESC LIMIT 5;");
$output = [];
foreach($resource as $row) {
    $output[] = $row;
    echo '<div>'.$row['num1'].' '.$row['operator'].' '.$row['num2'].' = '.$row['result'].' Date: '.$row['created'].'</div>';
}
?>