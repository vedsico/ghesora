<?php
session_start();
include "db_config.php";


$folder = "posts";

include("upload.php");



//var_dump($insert);die();

































// prepare and bind
$stmt = $mysqli->prepare("INSERT INTO posts (category_id, user_id, image_url, created, color) VALUES (?, ?, ?, ?, ?)");
$stmt->bind_param("sisss", $_POST["category"], $_SESSION["user_id"], $insert, date('Y-m-d H:i:s'), $_POST["color"]);

// set parameters and execute
$stmt->execute();

header("Location: view_post.php?id=" . $mysqli->insert_id);