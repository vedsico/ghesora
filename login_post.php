<?php
session_start();

include "db_config.php";

// prepare and bind
$stmt = $mysqli->prepare("SELECT * FROM users WHERE email = ? AND password = ?");
$stmt->bind_param("ss", $_POST["email"], $_POST["password"]);

// set parameters and execute
$stmt->execute();

$result = $stmt->get_result(); // get the mysqli result
$user = $result->fetch_assoc(); // fetch data   


if($result->num_rows > 0) {
	
	$_SESSION["user_id"] = $user["id"];

header("Location: dashboard.php?id=".$_SESSION["user_id"]);

} else {
	header("Location: login.php");
}