<?php

session_start();
error_reporting(E_ERROR | E_WARNING | E_PARSE);
$fnames = 'yes';
if (isset($_POST['hfname'])) {
    $fn = $_POST['fname'];
    $_SESSION['hfname'] = $_POST['hfname'];
    $_SESSION['wfname'] = $_POST['wfname'];
    $_SESSION['witnessfname'] = $_POST['witnessfname'];
    $_SESSION['witness2fname'] = $_POST['witness2fname'];

    //echo $fname;

    // function inc()
    // {
    //     sub();
    //     header('Location: payment.php');
    //     //include 'payment.php';
}
// sub();
// echo inc();
