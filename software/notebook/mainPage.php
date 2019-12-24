<?php
header('Content-Type: text/html; charset=utf-8');
require_once('inc/common.inc.php');

$username = getFromSession('username');
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="style/mainPage.css">
        <title>Notebook main Page</title>
        <script src="js/mainPage.js"></script>
    </head>
    <body>
        <div class="mainContainer">
            <div class="title">Записная книжка<br>Привет, <?php echo $username ?>!</div>
        </div>
    </body>
</html>

<!-- страница промежуточная - на нее был переход после успешной логинации,
сейчас не применяется, но использовать можно; оставлена для примера -->
