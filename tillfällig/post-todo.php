<?php 
session_start();

if($_SERVER['REQUEST_METHOD'] !== "POST")
    die('Needs to be a POST method');

if(!isset($_SESSION["user"]))
    die('Not authorized...');
        
if( !isset($_POST["title"]) || !isset($_POST["date"]) )
    die('Missing title or date');

require_once('../classes/db.php');

$user = $_SESSION["user"];

$db = new DB();

$result = $db->query("INSERT INTO `todo` (`title`, `date`, `user_id`) VALUES (?, ?, ?)", "sss", [$_POST["title"], $_POST["date"], $user["id"]]);

header("Location: /");

?>