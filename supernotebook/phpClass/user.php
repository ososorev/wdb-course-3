<?php


class user
{
    private $userName;
    private $userSession;
    private $arrUserNotes;
    private $userId;

    function __construct($userId){
        $this->userId = $userId;
        //$this->userSession = $userSession;
        $this->getUserData();

    }

    private function getUserData(){
        $db = new DataBase('localhost', 'root', '', 'users');
        $query = "SELECT * FROM `registration_data` WHERE `id` LIKE '" . $this->userId . "'";
        $selectResult = $db->select($query);
        if ($selectResult != null){
            $this->userName = $selectResult['0']['username'];
        }
    }

    public function getArrUserNotes()
    {
        $db = new DataBase('localhost', 'root', '', 'users');
        $query = "SELECT * FROM `notes` WHERE `user_id` LIKE '" . $this->userId . "'";
        $this->arrUserNotes = $db->select($query);
        return $this->arrUserNotes;
    }



    public function getUserId()
    {
        return $this->userId;
    }

    public function getUserName()
    {
        return $this->userName;
    }

    public function getUserSession()
    {
        return $this->userSession;
    }




}