<?php 

if($_SERVER['REQUEST_METHOD'] !== "POST")
    die('Needs to be a POST method');

if( !isset($_POST["username"]) || !isset($_POST["password"]) )
    die('Missing username or password');

require_once('../classes/DB.php');

$username = $_POST["username"];
$hashed_pass = password_hash(($_POST["password"]), null);

$db = new DB();

try {
    $result = $db->query("INSERT INTO `user` (`username`, `password`) VALUES (?,?)", "ss", [$username, $hashed_pass]); 
} catch (Exception $e) {} 

if($result) {
    header("Location: /login.php");
}else{
    header("Location: /register.php?error=true");
}

?>