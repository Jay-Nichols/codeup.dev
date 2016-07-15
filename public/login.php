<?PHP

var_dump($_POST);


if(!empty($_POST)){
	$userName = $_POST['userName'];
	$password = $_POST['password'];
	if ($userName == 'guest' && $password == 'password') {
		header('Location: authorized.php');
		exit;
	} else {
		$message = "Not Valid.";
	}

} else {
	$message = "";
}


?>


<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
</head>
<body>
	 <form method="POST" action="login.php">
        <label>User Name</label>
        <input type="text" name="userName"><br>
        <label>Password</label>
        <input type="text" name="password"><br>
        <input type="submit">
    </form>

  	<h1><?= $message; ?><h1>

</body>
</html>
