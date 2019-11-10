<?php

class Database {
    private function connection() {
        return mysqli_connect("localhost", "root", "", "register");
    }
    private $inputUsername;
    private $inputPassword;
    private $inputEMail;
    function _construct($inputUsername, $inputPassword, $inputEMail) {
        $this->connection();
        $this->inputUsername = $inputUsername;
        $this->inputPassword = $inputPassword;
        $this->inputEMail = $inputEMail;
    }
    private function query($sql) {
        mysqli_query($this->connection(), $sql);
    }
    function insert() {
        $this->query("INSERT INTO user(username, password, email)
        VALUES ('$this->inputUsername', '$this->inputPassword', '$this->inputEMail')");
    }
}
