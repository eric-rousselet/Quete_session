<?php

session_start();
if (empty($_SESSION['loginname'])) {
    header('Location: /login.php');
    exit();
}

?>