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

    $errors = new checkRegData($username, $password, $confirmPass, $email);

    $errorsArr = $errors->getErrors();
    if ($errorsArr['error'] == 0){
        $db = new DataBase('localhost','root', '', 'users');
        $db->insert('registration_data', $arrData);
    }

    echo json_encode($errorsArr, JSON_UNESCAPED_UNICODE);






