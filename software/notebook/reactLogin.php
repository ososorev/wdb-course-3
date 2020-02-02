<?php
require_once('inc/common.inc.php');

$inputUsername = $_REQUEST["inputUsername"];
$inputPassword = $_REQUEST["inputPassword"];
$buttonLog = $_REQUEST["buttonLogin"];

if (isset($buttonLog)) {
    if (!empty($inputUsername) && !empty($inputPassword)) {
        $result = UserDatabase::checkPair($inputUsername, $inputPassword);
        if ($result === true) {
            saveToSession('username', $inputUsername);
            echo "true";
            exit();
        } else {
            echo $result;
        }
    } else {
        echo "Введите свое имя и пароль, если Вы зарегистрированы";
    }
}