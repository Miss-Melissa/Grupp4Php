<?php

//require_once $_SERVER['DOCUMENT_ROOT'] . "/google/google-config.php";

session_start();

$user = null;

if (isset($_SESSION["user"])) {
    $user = $_SESSION["user"];
};

?>

