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
        $resource = self::query("SELECT username FROM user WHERE username = '$inputUsername'");
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

    public static function checkPair($inputUsername, $inputPassword) {
        $resource = self::query("SELECT password FROM user
            WHERE  username = '$inputUsername' AND password=md5('$inputPassword')");
        $user = mysqli_fetch_assoc($resource); // array или NULL
        if (!empty($user)) {
            return true;
        } else {
            return "Проверьте введенные имя и пароль";
        }
    }

    // not used
    private static function getAllUsers() {
        return self::query("SELECT username FROM user ORDER BY username");
    }

    // not used
    private static function getUserList() {
        $users = [];
        $userList = self::getAllUsers();
        foreach ($userList as $user) {
            $users[] = $user['username'];
        }
        return $users;
    }

    // not used
    private static function getPasswordByUsername($inputUsername)
    {
        return self::query("SELECT password FROM user WHERE username = '$inputUsername'");
    }

    // not used
    public static function checkPassword($inputUsername, $inputPassword)
    {
        $validPasswordHash = self::getPasswordByUsername($inputUsername)[0]['password'];
        $passwordHash = md5($inputPassword);
        return $passwordHash == $validPasswordHash;
    }
}
