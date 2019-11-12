<?php
header ("Content-Type: text/html; charset=utf-8");
require_once "db.php";
$userName=$_REQUEST["userName"];
$password=$_REQUEST["password"];
$confirmPassword=$_REQUEST["confirmPassword"];
$email=$_REQUEST["email"];
$db = new dataBase("localhost", "root", "", "regforma");
$db->query("INSERT INTO `register`(`userName`, `password`, `email_id`) VALUES ('$userName','$password','$email')");
?>
<!doctype html>
<html lang="en">
<head>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="script.js">

    </script>
</head>
<body>

</body>
</html>