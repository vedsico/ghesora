<?php

session_start();

if(is_numeric($_SESSION["user_id"])) {
	session_destroy();
	header("Location: login.php");
}