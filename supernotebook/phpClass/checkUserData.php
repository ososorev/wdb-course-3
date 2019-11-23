<?php


class checkUserData
{

    private $username;
    private $password;
    private $userID;
    private $arrError;

    function __construct($username, $password){
        $this->username =  $username;
        $this->password = $password;

        $this->arrError['error'] = 0;
        if (!$this->checkEmpty()){

            $this->checkLogin();
        }

    }

    private function checkLogin(){
        $db = new DataBase('localhost', 'root', '', 'users');
        if ($this->username != null) {
            $query = "SELECT * FROM `registration_data` WHERE `username` LIKE '" . $this->username . "'";
            $selectResult = $db->select($query);

            if ($selectResult == null) {
                $this->arrError['error'] = 1;
                $this->arrError['error_username'] = "Пользователь не найден";
            }
            else{
                $this->userID = $selectResult['0']['id'];

                $this->checkPassword($selectResult['0']['password']);
            }

        }
    }

    private function checkPassword($password){
        if ($password!= $this->password){
            $this->arrError['error'] = 1;
            $this->arrError['error_password'] = "Пароль неверный";
        }

    }


    private function checkEmpty(){
        $isEmpty = 0;
        if($this->password == null) {
            $isEmpty = 1;
            $this->arrError['error'] = 1;
            $this->arrError['error_password'] = "Введите пароль";

        }
        if ($this->username == null) {
            $isEmpty = 1;
            $this->arrError['error'] = 1;
            $this->arrError['error_username'] = "Введите имя пользователя";
        }
        return $isEmpty;
    }

     public function getLoginResult(){
        return $this->arrError;
     }

     public function getUserID(){
        return$this->userID;
     }
}