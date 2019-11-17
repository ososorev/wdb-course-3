<?php
// header ('Content-Type: text/html; charset=utf-8');
// header('Location: http://localhost/wdb-course-3/software/notebook/mainPage.php');
require_once('inc/common.inc.php');

$inputUsername = $_REQUEST["inputUsername"];
$inputPassword = $_REQUEST["inputPassword"];
$buttonReg = $_REQUEST["buttonRegister"];
$buttonLog = $_REQUEST["buttonLogin"];
$error = '';
if (isset($buttonReg)) {
    return;
} elseif (!empty($inputUsername) && !empty($inputPassword) && isset($buttonLog)) {
    if (Database::checkPair($inputUsername, $inputPassword)) {
        return;
    } else {
        $error .= "Проверьте введенные имя и пароль";
    }
// } elseif (isset($buttonLog) && (empty($inputUsername) || empty($inputPassword))) {
} else {
    $error .= "Введите свое имя и пароль, если Вы зарегистрированы";
}

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="style/input.css">
        <title>Notebook input</title>
        <script src="js/input.js"></script>
    </head>
    <body>
        <div class="mainContainer">
            <div class="header">SUPER NOTEBOOK</div>
            <div class="content">
                <form id=form class="formBlock">
                    <input placeholder="Username" class="inputForm" name="inputUsername" type="text">
                    <input placeholder="Password" class="inputForm" name="inputPassword" type="password">
                    <input class="buttonLog" type="submit" name="buttonLogin" value="Login">
                    <input class="buttonReg" type="submit" name="buttonRegister" onclick="register()" value="Register">
                </form>
            </div>
            <div class="output"><?php echo $error ?></div>
            <div class="header footer">Copyright by ..., 2016</div>
        </div>
    </body>
</html>

<!--
http://localhost/wdb-course-3/software/notebook/input.php
$username = getFromSession('username');

<a href="register.php">
    <button type="button" onclick="register()" class="mainButton">Войти</button>
</a>
-->
