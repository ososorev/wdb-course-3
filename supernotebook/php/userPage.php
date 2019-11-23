<?php
    session_start();
    require_once($_SERVER['DOCUMENT_ROOT']."/phpClass/user.php");
    require_once($_SERVER['DOCUMENT_ROOT']."/phpClass/classDB.php");
    $user = null;

    if ($_SESSION['user_id'] != null){
        $user = new user($_SESSION['user_id']);
        $noteList = $user->getArrUserNotes();
    }



