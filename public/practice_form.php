<?php
function pageController() {
	if (isset($_SESSION['logged_in_user'])) {
		header('Location: authorized_page.php');
		exit();
	}
	$name = isset($_POST['name']) ? $_POST['name'] : '';
    $number = isset($_POST['number']) ? $_POST['number'] : '';
	

	if ($name == 'Jay' && $number == 123) {
		$_SESSION['logged_in_user'] = $name;
		header('Location: authorized_page.php');
		exit();
	}

	if ($name !== '' || $number !== '') {
		$message = 'Login Failed';
	} else {
		$message = 'Please log in';
	}
	

	return ['message' => $message];

	
}
session_start();
extract(pageController());
?>

<!DOCTYPE html>
<html>
<head>
    <title>POST Example</title>
</head>
<body>
	<h1><?= $message; ?></h1>
    <form method="POST" action="practice_form.php">
        <label>Name</label>
        <input type="text" name="name"><br>
        <label>Number</label>
        <input type="text" name="number"><br>
        <input type="submit">
    </form>
</body>
</html>