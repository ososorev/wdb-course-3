<?php

class Database {
    private static function connection() {
        return mysqli_connect("localhost", "root", "", "register");
    }
    private static function query($sql) {
        mysqli_query(self::connection(), $sql);
    }
    static function insert($inputUsername, $inputPassword, $inputEMail) {
        self::query("INSERT INTO user(username, password, email)
        VALUES ('$inputUsername', MD5('$inputPassword'), '$inputEMail')");
    }
}
