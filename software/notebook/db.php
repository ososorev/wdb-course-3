<?php

class Database {
    private static function connection() {
        return mysqli_connect("localhost", "root", "", "register");
    }

    private static function query($sql) {
        return mysqli_query(self::connection(), $sql);
    }

    private static function checkingUniquenessOfUsername($inputUsername)
    {
        $resource = self::query("SELECT username FROM user WHERE username = $inputUsername");
        $user = mysqli_fetch_assoc($resource); // array или NULL
        if (empty($user)) {
            return true;
        }
        return false;
    }

    public static function insert($inputUsername, $inputPassword, $inputEMail) {
        if (self::checkingUniquenessOfUsername($inputUsername)) {
        // if (!in_array($inputUsername, self::getUserList())) {
            self::query("INSERT INTO user(username, password, email)
            VALUES ('$inputUsername', MD5('$inputPassword'), '$inputEMail')");
        } else {
            echo "Пользователь с таким именем уже существует";
        }
        // mysqli_errors
    }

    private static function getAllUsers() {
        return self::query("SELECT username FROM user ORDER BY username");
    }

    private static function getUserList() {
        $users = [];
        $userList = self::getAllUsers();
        foreach ($userList as $user) {
            $users[] = $user['username'];
        }
        return $users;
    }

    private static function getPasswordByUsername($inputUsername)
    {
        return self::query("SELECT password FROM user WHERE username = $inputUsername");
    }

    public static function checkPassword($inputUsername, $inputPassword)
    {
        $validPasswordHash = self::getPasswordByUsername($inputUsername)[0]['password'];
        $passwordHash = md5($inputPassword);
        return $passwordHash == $validPasswordHash;
    }

    public static function checkPair($inputUsername, $inputPassword) {
        $resource = self::query("SELECT password FROM user
            WHERE  username = '$inputUsername' AND password='$inputPassword'");
        $user = mysqli_fetch_assoc($resource); // array или NULL
        if (!empty($user)) {
            return true;
        } else {
            return "Проверьте введенные имя и пароль";
//            echo "Проверьте введенные имя и пароль";
//            return false;
        }
//        if (!empty($resource)) {
//            $password = [];
//            foreach ($resource as $row) {
//                $password[] = $row;
//            }
//            if ($password['password'] == $inputPassword) {
//                return true;
//            } else {
//                return "Введите правильный пароль";
//            }
//        } else {
//            return "Такого пользователя не существует";
//        }
//        return false;
    }
}
