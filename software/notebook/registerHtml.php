<?php
header ("Content-Type: text/html; charset=utf-8");
require_once "db.php";

$inputUsername=$_REQUEST["inputUsername"];
$inputPassword=$_REQUEST["inputPassword"];
$inputConfirmPassword=$_REQUEST["inputConfirmPassword"];
$inputEMail=$_REQUEST["inputEMail"];
$button=$_REQUEST["button"];
if (!empty($inputUsername) && !empty($inputPassword) && !empty($inputConfirmPassword)) {
    if ($inputPassword == $inputConfirmPassword) {
        Database::insert($inputUsername, $inputPassword, $inputEMail);
    } else {
        echo "Проверьте введенный пароль!";
    }
} elseif (!isset($button)) {
    echo "Заполните все обязательные поля:<br />Username, Password, Confirm password";
}

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="style/register.css">
        <title>Register</title>
        <script src="js/register.js"></script>
    </head>
    <body>
        <div class="mainContainer">
            <div class="header">SUPER NOTEBOOK</div>
            <div class="content">
                <form id=form class="formBlock" method="post">
                    <input placeholder="Username" class="inputForm" name="inputUsername" type="text" required>
                    <input placeholder="Password" class="inputForm" name="inputPassword" type="password" required>
                    <input placeholder="Confirm password" class="inputForm" name="inputConfirmPassword" type="password" required>
                    <input placeholder="EMail" class="inputForm" name="inputEMail" type="text">
                    <input class="buttonReg" type="submit" name="button" onclick="send()" value="Register"/>
                </form>
            </div>
            <div class="output"></div>
            <div class="header footer">Copyright by ..., 2016</div>
        </div>
    </body>
</html>

<!--
http://localhost/wdb-course-3/software/notebook/registerHtml.php
-->
