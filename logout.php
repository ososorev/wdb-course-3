<?php
session_start();
unset($_SESSION['username']);
unset($_SESSION['id']);
session_unset();
session_destroy();
header("Location: index.html");
exit;
?>