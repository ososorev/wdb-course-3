<?php
    require_once("classDB.php");

    $arrData = array(
        'username' => $_REQUEST['username'],
        'password' => md5($_REQUEST['password']),
        'email'=> $_REQUEST['email']

    );
    $db = new DataBase('localhost','root', '', 'users');
    $db->insert('registration_data', $arrData);




