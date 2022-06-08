<?php
require_once $_SERVER['DOCUMENT_ROOT'] . "/google/google-config.php";

session_start();
$google_client->revokeToken();
session_destroy();

header("Location: /login.php");
?>