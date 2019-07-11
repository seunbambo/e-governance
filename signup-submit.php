<?php
session_start();
if (isset($_POST['firstName'])) {
    $_SESSION['firstName'] = $_POST['firstName'];
    $_SESSION['lastName'] = $_POST['lastName'];
    $_SESSION['email'] = $_POST['email'];
    $_SESSION['phone'] = $_POST['phone'];
    $_SESSION['password'] = $_POST['password'];
    //echo $_SESSION['email'];
    include 'index.php';
}
