<?php 
session_start();

if($_SERVER['REQUEST_METHOD'] !== "GET")
    die('Needs to be a GET method');

if(!isset($_SESSION["user"]))
    die('Not authorized...');
        
if (!isset($_GET['id']))
    die('Missing product id');

require_once('../classes/DB.php');

$db = new DB();

$result = $db->query("DELETE FROM `products` WHERE `id`=?", "s", [$_GET['id']]);

header("Location: /admin-page.php");

?>