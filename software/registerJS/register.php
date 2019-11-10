<?php
header ("Content-Type: text/html; charset=utf-8");
require_once "db.php";

$inputUsername=$_REQUEST["inputUsername"];
$inputPassword=$_REQUEST["inputPassword"];
$inputConfirmPassword=$_REQUEST["inputConfirmPassword"];
$inputEMail=$_REQUEST["inputEMail"];
$button=$_REQUEST["button"];
//if (!empty($inputUsername) && !empty($inputPassword) && !empty($inputConfirmPassword)) {
//    if ($inputPassword === $inputConfirmPassword) {
        //if (!empty($button)) {
            $createDatabase = new Database($inputUsername, $inputPassword, $inputEMail);
            $createDatabase->insert();
        //}
    //}
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
