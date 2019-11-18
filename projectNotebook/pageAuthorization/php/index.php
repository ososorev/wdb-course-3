<?php
    //require_once "sql.php";
    $username = $_REQUEST["username"];
    $password = $_REQUEST["password"];
?>

<html>
    <head>
        <meta charset="UTF-8">
        <meta name="notebook" content="width=device-width, initial-scale=1.0">
        <title>notebook</title>
        <link rel="stylesheet" href="../style/style.css">
        <script src="../js/js.js"></script>
    </head>
    <body>
        <div class="container">
            <div class="header">
                SUPER NOTEBOOK
            </div>
            <form class="content">
                <input class="input" type="text" name="username" placeholder="Username" required />
                <input class="input" type="password" name="password" placeholder="Password" required />
                <button class="button" type="submit">Login</button>
                <button class="button" onclick="register()">Register</button>
            </form>
            <div class="oshibka"></div>
            <div class="footer">
                    Copyright by ..., 2016
            </div>
        </div>
    </body>
</html>