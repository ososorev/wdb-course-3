<?php
session_start();

if(!isset($_SESSION['time'])) {                     // if !isset установленное время остается без изменения, при каждом обновлении страницы
    $_SESSION['ua'] = $_SERVER['HTTP_USER_AGENT'];
    $_SERVER['REMOTE_ADDR'];
    ['HTTP_X_FORWARDED_FOR'];
    $_SESSION['time'] = date("H:i:s");
}
if ($_SESSION['ua'] != $_SERVER['HTTP_USER_AGENT']) {
    die('Wrong browser');
}
echo $_SESSION['time'];