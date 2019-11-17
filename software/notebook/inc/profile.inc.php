<?php
require_once('common.inc.php');

$inputUsername = $_POST['inputUsername'] ?? '';
$inputPassword = $_POST['inputPassword'] ?? '';
$inputConfirmPassword = $_POST['inputConfirmPassword'] ?? '';
$inputEMail = $_POST['inputEMail'] ?? '';
$isChanged = false;

$currentName = getFromSession('$inputUsername');

if ($currentName != $inputUsername) {
    // changeUsername($currentName, $inputUsername);
    saveToSession('username', $inputUsername);
    $isChanged = true;

}
if ($inputPassword !== '') {
    $hash = md5($inputPassword);
    // changePassword($inputUsername, $hash);
    $isChanged = true;
}
