<?php 

session_start();

if($_SERVER['REQUEST_METHOD'] !== "POST")
    die('Needs to be a POST method');

if( !isset($_POST["username"]) || !isset($_POST["password"]) )
    die('Missing username or password');

require_once('../classes/DB.php');

$username = $_POST["username"];
$pass = $_POST["password"];

$db = new DB();

$result = $db->query("SELECT `id`, `username`, `password` FROM `user` WHERE `username`=?", "s", [$username]);
var_dump($result);

$login_success = password_verify($pass, $result[0]['password']);

if($result && $login_success) {
    $_SESSION["user"] = $result[0];
    header("Location: /");
}else{
    header("Location: /login.php");
}

?>