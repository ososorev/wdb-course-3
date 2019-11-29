<?php
// header ('Content-Type: text/html; charset=utf-8');
// header('Location: http://localhost/wdb-course-3/software/notebook/mainPage.php');
require_once('inc/common.inc.php');

$inputUsername = $_REQUEST["inputUsername"];
$inputPassword = $_REQUEST["inputPassword"];
$buttonLog = $_REQUEST["buttonLogin"];
$error = '';
$username = getFromSession('username');

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="style/main.css">
        <title>Notebook main</title>
        <script src="js/main.js"></script>
    </head>
    <body>
        <div class="mainContainer">
            <div class="header">SUPER NOTEBOOK</br>Welcome, <?php echo $username?></div>
            <div class="content">
                <div class="leftContainer">
                    <div class="searchBlock">
                        <input class="inputSearchBlock" type="text" placeholder="Search">
                    </div>
                    <div class="listOfNotesBlock"></div>
                    <div class="buttonBlock">
                        <button type="button" class="buttonAddNote" name="buttonAddNote" onclick="addNewNote()">
                            Add new note
                        </button>
                    </div>
                </div>
                <div class="betweenContainer"></div>
                <div class="rightContainer">
                    <div class="infoBlock">Name note,  Data</div>
                </div>
            </div>
            <div class="output"><?php echo $error ?></div>
            <div class="header footer">Copyright by ..., 2016</div>
        </div>
    </body>
</html>

<!--
http://localhost/wdb-course-3/software/notebook/main.php
$username = getFromSession('username');

<a href="register.php">
    <button type="button" onclick="register()" class="mainButton">Войти</button>
</a>
-->
