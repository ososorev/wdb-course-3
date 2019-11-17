<?php

function startSession() {
    session_name("sessionUsername");
    session_start();
}

function saveToSession($key, $value) {
    $_SESSION[$key] = $value;
}

function getFromSession($key) {
    return $_SESSION[$key] ?? '';
}

//startSession();
//if (!isset($_SESSION['username'])) {
//    $_SESSION['username'] = $inputUsername;
//}
//echo $_SESSION['username'];
