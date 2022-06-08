<?php

if ($_SERVER['REQUEST_METHOD'] !== "GET")
    die('Needs to be a GET method');

if (!isset($_SESSION["user"]))
    die('Not authorized...');

if (!isset($_GET['id']))
    die('Missing product id');


require_once('./classes/DB.php');

$db = new DB();
$result = $db->query("SELECT * FROM `products` WHERE `id`=?", "i", [$_GET['id']]);

if($result)
    $todo = $result[0];
else
    die("Could not find product record.");

