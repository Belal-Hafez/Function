<?php 

include("./db.php");
$id = null;
$email = $_POST["email"];
$password = $_POST["password"];
$stmt = $GLOBALS['connection'] -> prepare("INSERT into users(id, email, password) VALUES (?, ?, ?)");
$stmt -> bind_param("iss", $id, $email, $password);
$stmt -> execute();
session_start();
$_SESSION["username"] = $username;
header("Location: ./");
?>

