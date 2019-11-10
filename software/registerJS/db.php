<?php

class Database {
    private static function connection() {
        return mysqli_connect("localhost", "root", "", "register");
    }
    static function insert($inputUsername, $inputPassword, $inputEMail) {
        mysqli_query(self::connection(), "INSERT INTO user(username, password, email)
        VALUES ('$inputUsername', '$inputPassword', '$inputEMail')");
    }
}
