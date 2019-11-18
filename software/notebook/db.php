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
        $username = [];
        if (isset($resource)){
            foreach ($resource as $row) {
                $username[] = $row;
            }
            if ($username['username'] == $inputUsername) {
                return false;
            }
        }
        return true;
    }
//        if ($resource !== '') {
//            return true;
//        } else {
//            return false;
//        }
//    }

    public static function insert($inputUsername, $inputPassword, $inputEMail) {
        if (self::checkingUniquenessOfUsername($inputUsername)) {
        // if (!in_array("$inputUsername", self::getUserList())) {
            self::query("INSERT INTO user(username, password, email)
            VALUES ('$inputUsername', MD5('$inputPassword'), '$inputEMail')");
        }
    }

    private static function getAllUsers() {
        self::query("SELECT username FROM user ORDER BY username");
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
        self::query("SELECT password FROM user WHERE username = $inputUsername");
    }

    public static function checkPassword($inputUsername, $inputPassword)
    {
        $validPasswordHash = self::getPasswordByUsername($inputUsername)[0]['password'];
        $passwordHash = md5($inputPassword);
        return $passwordHash == $validPasswordHash;
    }

    public static function checkPair($inputUsername, $inputPassword) {
//        self::query("SELECT username, password FROM user");
//        if (username = $inputUsername && password = $inputPassword) {
            return true;
//        } else {
//            return false;
//        }
    }
}

//public static function select() {
//    $resource = self::query("SELECT first_operand, operation, second_operand, result
//      FROM calc ORDER BY id_calc DESC LIMIT 5");
//    $calc = [];
//    $print = '';
//    foreach ($resource as $i => $row) {
//        $calc[] = $row;
//        $print .= self::createdRow($calc, $i);
//    }
//    echo $print;
//}

