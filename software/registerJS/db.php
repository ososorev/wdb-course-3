<?php

class Database {
    function connection() {
        return mysqli_connect("localhost", "root", "", "user");
    }
    private $inputUsername;
    private $inputPassword;
    private $inputEMail;
    function _construct($inputUsername, $inputPassword, $inputEMail) {
        $this->inputUsername = $inputUsername;
        $this->inputPassword = $inputPassword;
        $this->inputEMail = $inputEMail;
    }
    function query($sql) {
        mysqli_query(connection(), $sql);
    }
    function insert() {
        query("INSERT INTO user(username, password, email)
        VALUES ('$this->inputUsername', '$this->inputPassword', '$this->inputEMail')");
    }
}
