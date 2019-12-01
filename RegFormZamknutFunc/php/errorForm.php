<?php
require_once($_SERVER['DOCUMENT_ROOT'] . "/bd/db.php");
require_once($_SERVER['DOCUMENT_ROOT'] . "/bd/registration.php");
$username = $_REQUEST['username'];
$password = (($_REQUEST['password'] != null) ? md5($_REQUEST['password']) : null );
$confirmPassword = (($_REQUEST['confirmPass'] != null) ? md5($_REQUEST['confirmPass']) : null );
$email= $_REQUEST['email'];
$arrData = array(
    'username' => $username,
    'password' => $password,
    'email'=> $email
);
$errors = new checkRegData($username, $password, $confirmPassword, $email);
$errorsArr = $errors->getErrors();
if ($errorsArr['error'] == 0){
    $db = new DataBase('localhost','root', '', 'lesson');
    $db->insert('signup', $arrData);
}
echo json_encode($errorsArr, JSON_UNESCAPED_UNICODE);
