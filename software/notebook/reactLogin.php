<?php
require_once('inc/common.inc.php');

$inputUsername = $_REQUEST["inputUsername"];
$inputPassword = $_REQUEST["inputPassword"];
//echo "<pre>";
//print_r($_REQUEST);
//echo "</pre>";
//die();
if (!empty($inputUsername) && !empty($inputPassword)) {
    $result = UserDatabase::checkPair($inputUsername, $inputPassword);
//    echo "<pre>";
//    print_r($result);
//    echo "</pre>";
//    die();
    if ($result === true) {
        saveToSession('username', $inputUsername);
        echo "true";
        exit();
    } else {
        echo "вы ввели неверные данные";
    }
} else {
    echo "Введите свое имя и пароль, если Вы зарегистрированы";
}