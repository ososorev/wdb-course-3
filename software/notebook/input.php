<?php
ob_start();
// header ('Content-Type: text/html; charset=utf-8');
// header('Location: http://localhost/wdb-course-3/software/notebook/mainPage.php');
require_once('inc/common.inc.php');

$inputUsername = $_REQUEST["inputUsername"];
$inputPassword = $_REQUEST["inputPassword"];
$buttonLog = $_REQUEST["buttonLogin"];
$error = '';
if (isset($buttonLog)) {
    if (!empty($inputUsername) && !empty($inputPassword)) {
        $result = Database::checkPair($inputUsername, $inputPassword);
        if ($result === true) {
            saveToSession('username', $inputUsername);
            header('Location: http://localhost/wdb-course-3/software/notebook/mainPage.php');
            exit();
        } else {
            $error .= $result;
        }
    } else {
        $error .= "Введите свое имя и пароль, если Вы зарегистрированы";
    }
}
ob_end_flush();
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
                <form id=form class="formBlock" method="post">
                    <input placeholder="Username" class="inputForm" name="inputUsername" type="text">
                    <input placeholder="Password" class="inputForm" name="inputPassword" autocomplete="off" type="password">
                    <input class="buttonInput buttonLog" type="submit" name="buttonLogin" value="Login">
                    <input class="buttonInput buttonReg" name="buttonRegister" onclick="register()" value="Register">
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
