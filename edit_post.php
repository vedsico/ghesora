<?php
session_start();
include "db_config.php";
//var_dump($_POST);die();
$folder = "posts";
if(strlen($_FILES["file"]["name"]) > 0){

include("upload.php");
// prepare and bind
$stmt = $mysqli->prepare("UPDATE posts SET image_url = ? WHERE id = ?");
$stmt->bind_param("si", $insert, $_SESSION["user_id"]);

// set parameters and execute
$stmt->execute();
}

if(strlen($_POST["category"]) > 0){

	$stmt = $mysqli->prepare("UPDATE posts SET category_id = ?, color = ? WHERE id = ?");
$stmt->bind_param("isi", $_POST["category"], $_POST["color"], $_SESSION["user_id"]);

// set parameters and execute
$stmt->execute();
}



header("Location: dashboard.php?id=" . $_SESSION["user_id"]);