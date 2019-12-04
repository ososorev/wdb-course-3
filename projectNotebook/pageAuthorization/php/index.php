<?php
    ob_start();
    require_once "sql.php";
    require_once "session.php";
    $username = $_REQUEST["username"];
    $password = $_REQUEST["password"];
    $buttonLog = $_REQUEST["buttonLogin"];
    $error = '';
    function rad($username, $password){
        $resource = sql::querySelect("SELECT password FROM user WHERE username = '$username'");
        if(!empty($resource)){
            $passwords = [];
            foreach ($resource as $row){
                $passwords[] = $row;
            };
            if($passwords[0]['password'] == $password){
                return true;
            }else{
                return false;
            }
        }else{
            return false;
        }
    }
    if (isset($buttonLog)) {
        if (!empty($username) && !empty($password)) {
            if (rad($username, $password)) {
                saveToSession('username', $username);
                header('Location: http://localhost/wdb-course-3/projectNotebook/pageWork/php/index.php');
                exit();
            } else {
                $error .= "Проверьте введенные имя и пароль";
            }
        } else {
            $error .= "Введите свое имя и пароль, если Вы зарегистрированы";
        }
    }
    ob_end_flush();
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
            <form class="content" method='POST'>
                <input class="input" type="text" name="username" placeholder="Username" required />
                <input class="input" type="password" name="password" placeholder="Password" required />
                <input class="button" type="submit" name="buttonLogin" value="Login"/>
                <button class="button" onclick="register()">Register</button>
            </form>
            <div class="oshibka"><?php echo $error?></div>
            <div class="footer">
                    Copyright by ..., 2016
            </div>
        </div>
    </body>
</html>