<?php
require_once("phpClass/classDB.php");
require_once("phpClass/checkUserData.php");

header('Access-Control-Allow-Origin: http://supernotebook/');
header('Access-Control-Allow-Credentials: true');

session_start();

$username = $_REQUEST['username'];
$password = (($_REQUEST['password'] != null) ? md5($_REQUEST['password']) : null );

$arrData = array(
    'error' => '0',
    'error_username' => $username,
    'error_password' => $password,
);

$checkUser = new checkUserData($username, $password);
$errors = $checkUser->getLoginResult();

$_SESSION['user_id'] = $checkUser->getUserID();

//setcookie("user_id", $checkUser->getUserID());
echo json_encode($errors, JSON_UNESCAPED_UNICODE);









