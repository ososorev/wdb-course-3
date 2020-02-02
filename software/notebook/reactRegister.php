<?php
header ("Content-Type: text/html; charset=utf-8");
require_once 'inc/common.inc.php';

$inputUsername = $_REQUEST["inputUsername"];
$inputPassword = $_REQUEST["inputPassword"];
$inputConfirmPassword = $_REQUEST["inputConfirmPassword"];
$inputEMail = $_REQUEST["inputEMail"];
$button = $_REQUEST["button"];
if (!empty($inputUsername) && !empty($inputPassword) && !empty($inputConfirmPassword)) {
    if ($inputPassword == $inputConfirmPassword) {
        UserDatabase::insert($inputUsername, $inputPassword, $inputEMail);
        // if (checkPassword($name, $password)) {
        saveToSession('username', $inputUsername);
        echo "";
        exit();
    } else {
        echo "Проверьте введенный пароль!";
    }
} elseif (isset($button)) {
    echo "Заполните все обязательные поля:<br />Username, Password, Confirm password";
}