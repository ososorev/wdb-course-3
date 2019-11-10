<?php


class checkRegData
{
    private $confirmPass;
    private $username;
    private $password;
    private $email;


    private $arrError;

    function __construct($username, $password, $confirmPass, $email){
        $this->username =  $username;
        $this->password = $password;
        $this->confirmPass = $confirmPass;
        $this->email = $email;
        $this->arrError['error'] = 0;
        $this->checkUsername();
        $this->checkPassword();
        $this->checkEmail();


    }
    private function checkUsername(){
        $db = new DataBase('localhost', 'root', '', 'users');
        if ($this->username != null) {
            $query = "SELECT * FROM `registration_data` WHERE `username` LIKE '" . $this->username . "'";
            if ($db->select($query) != null) {
                $this->arrError['error'] = 1;
                $this->arrError['error_username'] = "Имя пользователя " . $this->username . " уже существует";
            }
        }
        else{
            $this->arrError['error'] = 1;
            $this->arrError['error_username'] = "Введите имя пользователя";
        }
    }

    private function checkPassword(){
        if($this->password != null and $this->confirmPass != null) {
            if ($this->password != $this->confirmPass) {
                $this->arrError['error'] = 1;
                $this->arrError['error_password'] = "Пароли не совпадаеют";
            }
        }
        else{
            $this->arrError['error'] = 1;
            $this->arrError['error_password'] = "Введите пароль";
        }
    }

    private function checkEmail(){
        if ($this->email != null) {
            if (!filter_var($this->email, FILTER_VALIDATE_EMAIL)) {
                $this->arrError['error'] = 1;
                $this->arrError['error_email'] = "Email указан неверно";
            }
        }
        else{
            $this->arrError['error'] = 1;
            $this->arrError['error_email'] = "Введите email";
        }
    }

    function getErrors(){

        return $this->arrError;
    }

}