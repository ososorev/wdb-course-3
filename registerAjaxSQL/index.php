<?php
header ("Content-Type: text/html; charset=utf-8");
require_once "db.php";
$login=$_REQUEST["login"];
$password=$_REQUEST["password"];
$confirmPassword=$_REQUEST["confirmPassword"];
$email=$_REQUEST["email"];
$db = new dataBase("localhost", "root", "", "lesson");
$db->query("INSERT INTO `regforma`(`username`, `password`, `email`) VALUES ('$login','$password','$email')");
?>
<!doctype html>
<html lang="en">
<head>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Document</title>
    <script src="script.js">.

    </script>
    <link rel="stylesheet" href="style.css">
</head>
<body>

</body>
</html>