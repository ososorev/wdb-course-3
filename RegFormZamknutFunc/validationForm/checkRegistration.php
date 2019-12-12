<?php

class checkRegData
{
    private $username;
    private $password;
    private $confirmPassword;
    private $email;
    private $arrError;

    function __construct($username, $password, $confirmPassword, $email)
    {
        $this->username = $username;
        $this->password = $password;
        $this->confirmPassword = $confirmPassword;
        $this->email = $email;
        $this->arrError['error'] = 0;
        $this->checkUsername();
        $this->checkPassword();
        $this->checkEmail();
        $this->checkEmailDataBase();
    }

    private function checkUsername()
    {
        $db = new DataBase('localhost', 'root', '', 'lesson');
        if ($this->username != null) {
            $query = "SELECT * FROM `signup` WHERE `username` LIKE '" . $this->username . "'";
            if ($db->select($query) != null) {
                $this->arrError['error'] = 1;
                $this->arrError['error_username'] = "Данный пользователь " . $this->username . " уже существует";
            }
        } else {
            $this->arrError['error'] = 1;
            $this->arrError['error_username'] = "Введите имя пользователя";

        }
        if(mb_strlen($this->username) >= 1 && mb_strlen($this->username) < 4 || mb_strlen($this->username) > 20) {
            $this->arrError['error'] = 1;
            $this->arrError['error_username'] = "Недопустимая длина логина";

        }
    }

    private function checkPassword()
    {
        if ($this->password != null and $this->confirmPassword != null) {
            if ($this->password != $this->confirmPassword) {
                $this->arrError['error'] = 1;
                $this->arrError['error_password'] = "Пароли не совпадают";
            }
        } else {
            $this->arrError['error'] = 1;
            $this->arrError['error_password'] = "Введите пароль";
        }
    }

    private function checkEmail()
    {
        if ($this->email != null) {
            if (!filter_var($this->email, FILTER_VALIDATE_EMAIL)) {
                $this->arrError['error'] = 1;
                $this->arrError['error_email'] = "Email указан неверно";
            }
        } else {
            $this->arrError['error'] = 1;
            $this->arrError['error_email'] = "Введите email";
        }
    }

    private function checkEmailDataBase()
    {
        $dbEmail = new DataBase('localhost', 'root', '', 'lesson');
        if ($this->email != null) {
            $query = "SELECT * FROM `signup` WHERE `email` LIKE '" . $this->email . "'";
            if ($dbEmail->select($query) != null) {
                $this->arrError['error'] = 1;
                $this->arrError['error_email'] = "E-mail: " . $this->email . " уже зарегестрирован";
            }
        }
    }

    public function getErrors()
    {
        return $this->arrError;
    }
}
