<?php
    require_once("classDB.php");
    require_once ("checkRegData.php");

    $username = $_REQUEST['username'];
    $password = (($_REQUEST['password'] != null) ? md5($_REQUEST['password']) : null );
    $confirmPass = (($_REQUEST['confirmPass'] != null) ? md5($_REQUEST['confirmPass']) : null );
    $email= $_REQUEST['email'];

    $arrData = array(
        'username' => $username,
        'password' => $password,
        'email'=> $email
    );

    $db = new DataBase('localhost','root', '', 'users');
    $errors = new checkRegData($username, $password, $confirmPass, $email);
    $errorsArr = $errors->getErrors();
    if ($errorsArr == null){
        $db->insert('registration_data', $arrData);
    }
    else{
        echo json_encode($errorsArr, JSON_UNESCAPED_UNICODE);
    }





