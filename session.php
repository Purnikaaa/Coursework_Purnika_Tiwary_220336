<?php
ob_start();
session_start();

function isUserLoggedIn()
{
    return isset($_SESSION["uname"]);
}

function checkUserLoggedIn()
{
    if (!isUserLoggedIn()) {
        header("Location: login.php");
        exit();
    }
}
?>