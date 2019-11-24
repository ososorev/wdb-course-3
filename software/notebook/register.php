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
        Database::insert($inputUsername, $inputPassword, $inputEMail);
        // if (checkPassword($name, $password)) {
        saveToSession('username', $inputUsername);
    } else {
        echo "Проверьте введенный пароль!";
    }
} elseif (isset($button)) {
    echo "Заполните все обязательные поля:<br />Username, Password, Confirm password";
}

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="style/register.css">
        <title>Register</title>
        <script src="js/registerClosure.js"></script>
        <!--
        <script src="js/register.js"></script>
        -->
    </head>
    <body>
    </body>
</html>

<!--
http://localhost/wdb-course-3/software/notebook/register.php
$username = getFromSession('username');
-->
