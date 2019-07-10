<?php

session_start();
error_reporting(E_ERROR | E_WARNING | E_PARSE);
$fnames = 'yes';
if (isset($_POST['firstname'])) {
    $fn = $_POST['fname'];
    $_SESSION['firstname'] = $_POST['firstname'];
    $_SESSION['mname'] = $_POST['mname'];
    $_SESSION['fname'] = $_POST['fname'];
    $_SESSION['surname'] = $_POST['surname'];
    $_SESSION['middlename'] = $_POST['middlename'];
    $_SESSION['weight'] = $_POST['weight'];
    $_SESSION['height'] = $_POST['height'];
    $_SESSION['street'] = $_POST['street'];
    $_SESSION['pob'] = $_POST['pob'];
    $_SESSION['city'] = $_POST['city'];
    $_SESSION['state'] = $_POST['state'];

    $fname = $_SESSION['fname'];
    $street = $_SESSION['street'];
    $city = $_SESSION['city'];
    $state = $_SESSION['state'];

    $fnames = 'yes';
    //echo $fname;

    // function inc()
    // {
    //     sub();
    //     header('Location: payment.php');
    //     //include 'payment.php';
}
// sub();
// echo inc();
