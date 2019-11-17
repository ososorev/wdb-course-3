<?php
    require_once "sql.php";
    $username = $_REQUEST["username"];
    $password = $_REQUEST["password"];
    $confirmPassword = $_REQUEST["confirmPassword"];
    $email = $_REQUEST["email"];
    if (!empty($username) && !empty($password) && !empty($confirmPassword)) {
        if ($password == $confirmPassword) {
            sql::queryInsert("INSERT INTO user(username, password, email)
                VALUES ('$username', '$password', '$email')");
        } else {
            echo "Проверьте введенный пароль!";
        }
    } else {
        echo "Заполните все обязательные поля:<br />Username, Password, Confirm password";
    }
?>