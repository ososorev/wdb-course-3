<?php
$login = filter_var(trim($_POST['login']), FILTER_SANITIZE_STRING);
$password = filter_var(trim($_POST['password']), FILTER_SANITIZE_STRING);
$password = md5($password);
$mysql = new mysqli('localhost','root', '', 'lesson');
$result = $mysql->query("SELECT * FROM `signup` WHERE `username` = '$login' AND `password` = '$password'");
$user = $result->fetch_assoc(); // выбираем все данные, но как массив спомощью функ. fetch_assoc
if(count($user) == 0) { //с помощью count считаем количество объектов в массиве и если их колич равно 0 то далее-->
echo "Неправильный логин или пароль";
    exit();
}

setcookie('user', $user['username'], time() + 3600, "/");

//print_r($user);
$mysql->close();
header('Location: /notebook.php');