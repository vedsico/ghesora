<?php
session_start();
include("db_config.php");
$sql = "DELETE FROM posts WHERE id= ?";

$stmt = $mysqli->prepare($sql);
$stmt->bind_param('i', $_GET["id"]);
$stmt->execute();

header("Location: dashboard.php?id=".$_SESSION["user_id"]);