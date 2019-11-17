<?php
    session_start();
    //session_unset();
    require_once "sql.php";
    $username = $_REQUEST["username"];
    $password = $_REQUEST["password"];
    $confirmPassword = $_REQUEST["confirmPassword"];
    $email = $_REQUEST["email"];
    $users = sql::querySelect("SELECT username FROM user");
    $test = FALSE;
    foreach ($users as $user){
        if($user['username'] == $username){
            $test = TRUE;
        };
    };
    if (!$test){
        if (!empty($username) && !empty($password) && !empty($confirmPassword)) {
            if ($password == $confirmPassword) {
                sql::queryInsert("INSERT INTO user(username, password, email)
                    VALUES ('$username', '$password', '$email')");
                    if (!isset($_SESSION['newsession'])) {
                        $_SESSION['username'] = $username;
                        $_SESSION['password'] = $password;
                    }
            } else {
                echo "Проверьте введенный пароль!";
            }
        } else {
            echo "Заполните все обязательные поля:<br />Username, Password, Confirm password";
        }
    }else {
        echo "Такой Username уже существует <br /> Смените Username";
    }
?>