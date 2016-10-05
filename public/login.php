<?php
require "functions.php";
require_once "../src/Auth.php";


function pageController() {
	session_start();

	
	if($_SERVER['REQUEST_METHOD'] == 'POST') {
		$userName = inputGet('userName');
		$password = inputGet('password');
		Auth::attempt($userName, $password) ? header('Location: authorized.php') : header('Location: login.php');
		exit();
	}
	// if ($userName == 'guest' && $password == 'password') {
	// 	$_SESSION['userName'] = $userName;
	// 	exit;
	// } elseif ($userName === null && $password === null) {
	// 	$message = "";
	// } else {
	// 	$message = "Not a Valid Password.";
	// }
	// return ['message' => $message];
}

pageController();

?>

<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="/css/login.css">
		<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
</head>
<body>

	<div class="login-page">
		<div class="form">
			<form method="POST" action="login.php" class="login-form">
	  			<input type="text" name="userName" placeholder="username"/>
	  			<input type="password" name="password" placeholder="password"/>
	 			<button>Login</button>
	  			<p class="message">Not registered? <a href="#">Create an account</a></p>
			</form>
  		</div>
	</div>

	<!-- <h1><?= $message; ?><h1> -->

 <script>
"use strict";

$('.message a').click(function(){
   $('form').animate({height: "toggle", opacity: "toggle"}, "slow");
});



</script>
</body>
</html>
