<?php
$n1 = $_POST['n1'];
$n2 = $_POST['n2'];
$oper = $_POST['oper'];

if ($_POST['oper']) {
    if ($oper == "+") {
        $result = $n1 + $n2;
    } elseif ($oper == "-") {
        $result = $n1 - $n2;
    } elseif ($oper == "*") {
        $result = $n1 * $n2;
    } elseif ($oper == "/") {
        $result = $n1 / $n2;
    }
    echo $result;
}






$connection = mysqli_connect("localhost", "root", "", "calculator test");

mysqli_query(
    $connection,
    "INSERT INTO `calc` (`id_calc`, `num1`, `num2`, `operation`, `result`, `create_date`) VALUES (NULL, '$n1', '$n2', '$oper', '$result', CURRENT_TIMESTAMP)"
);



$resultlist = mysqli_query($connection, "SELECT result FROM `calc` ORDER BY id_calc DESC LIMIT 5");


while ($row = mysqli_fetch_array($resultlist)) {
    echo '<p>earlier result=' . $row['result'] . '</p>'; // выводим данные
}
