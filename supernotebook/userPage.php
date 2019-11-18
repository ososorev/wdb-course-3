<?php
    require_once ('phpClass/user.php');
    require_once ('phpClass/classDB.php');
    $user = null;

    if ($_COOKIE['user_id'] != null){
        $user = new user($_COOKIE['user_id'], $_COOKIE['PHPSESSID']);
        $noteList = $user->getArrUserNotes();
    }
