<?php 
session_start();

if($_SERVER['REQUEST_METHOD'] !== "POST")
    die('Needs to be a POST method');

if (!isset($_GET["id"]))
    die('Missing todo id');

if(!isset($_SESSION["user"]))
    die('Not authorized...');
        
if(!isset($_POST["title"]) ||!isset($_POST["date"]) )
    die('Missing title or date');

require_once('../classes/db.php');

$user = $_SESSION["user"];

$db = new DB();

$result = $db->query("UPDATE `todo` SET `title`=?, `date`=? WHERE `user_id`=? AND `id`=?", "ssii", [$_POST["title"], $_POST["date"], $user["id"], $_GET["id"]]);

header("Location: /");

?>