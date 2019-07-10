<?php

function locked()
{
    if (empty($_SESSION)) {
        header("Location: signup.php");
        exit();
    } else {
        include 'inc/header.php';
    }
}
