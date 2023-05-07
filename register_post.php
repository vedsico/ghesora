<?php


include "db_config.php";

// prepare and bind
$stmt = $mysqli->prepare("INSERT INTO users (email, password, created_at) VALUES (?, ?, ?)");
$stmt->bind_param("sss", $_POST["email"], $_POST["password"], date('Y-m-d H:i:s'));

// set parameters and execute
$stmt->execute();

header("Location: login.php");