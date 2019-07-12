<?php
session_start();
if (isset($_POST['login-email'])) {
    $_SESSION['login-email'] = $_POST['login-email'];
    $_SESSION['password'] = $_POST['password'];

    echo $_SESSION['login-email'];
    include 'index.php';
}
