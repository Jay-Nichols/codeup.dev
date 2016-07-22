<?php
require_once '../public/Log.php';

class Auth 
{	
	public static $password = '$2y$10$SLjwBwdOVvnMgWxvTI4Gb.YVcmDlPTpQystHMO2Kfyi/DS8rgA0Fm';

	public static function attempt($userName, $password)
	{
		if ($userName == 'guest' && password_verify($password, self::$password)) {
			$_SESSION['userName'] = $userName;
			$log = new Log();
			$log->info("User logged in successfully");
			return true;
		} else {
			$log = new Log();
			$log->error("Unable to log in user");
			return false;
		}
	}

	public static function check() 
	{
		return isset($_SESSION['userName']) ? true : false;

	}

	public static function user()
	{
		return $_SESSION['userName'];

	}	

	public static function logout() 
	{
		function clearSession()
		{
		    // clear $_SESSION array
		    session_unset();

		    // delete session data on the server
		    session_destroy();

		    // ensure client is sent a new session cookie
		    session_regenerate_id();

		    // start a new session - session_destroy() ended our previous session so
		    // if we want to store any new data in $_SESSION we must start a new one
		    session_start();
		}

		session_start();
		clearSession();

		header('Location: login.php');
		exit();
	}
 





}