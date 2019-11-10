<?php
header ("Content-Type: text/html; charset=utf-8");
require_once "db.php";

$inputUsername=$_REQUEST["inputUsername"];
$inputPassword=$_REQUEST["inputPassword"];
$inputConfirmPassword=$_REQUEST["inputConfirmPassword"];
$inputEMail=$_REQUEST["inputEMail"];
//if (!empty($inputUsername) && !empty($inputPassword) && !empty($inputConfirmPassword)) {
    if ($inputPassword == $inputConfirmPassword) {
        Database::insert($inputUsername, $inputPassword, $inputEMail);
    }
//}

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="register.css">
        <title>Register</title>
        <script src="register.js"></script>
    </head>
    <body>
    </body>
</html>

<!--
http://localhost/wdb-course-3/software/registerJS/register.php
-->
