<?php
session_start();
include "db_config.php";

$folder = "users";
if(strlen($_FILES["file"]["name"]) > 0){
include("upload.php");
// prepare and bind
$stmt = $mysqli->prepare("UPDATE users SET avatar_url = ? WHERE id = ?");
$stmt->bind_param("si", $insert, $_SESSION["user_id"]);

// set parameters and execute
$stmt->execute();
}

if(strlen($_POST["name"]) > 0){
	
	$stmt = $mysqli->prepare("UPDATE users SET email = ? WHERE id = ?");
$stmt->bind_param("si", $_POST["name"], $_SESSION["user_id"]);

// set parameters and execute
$stmt->execute();
}



header("Location: dashboard.php?id=" . $_SESSION["user_id"]);