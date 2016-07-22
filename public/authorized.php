<?php

require_once "../src/Auth.php";

session_start();
	
	if (!Auth::check()) {
// if (!isset($_SESSION['userName'])) {
	header('Location: login.php');
	exit;
} else {
	$message = "Welcome" . ' ' . Auth::user();
}


?>


<!DOCTYPE html>
<html>
<head>
	<title>Authorized</title>
</head>
<body>
	<h1>Authorized</h1>
	<h1><?= $message; ?></h1>
	<h1><a href="logout.php">Log Out</h1>
</body>
</html>
