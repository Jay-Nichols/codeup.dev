<?php
function pageController() {
	if(!isset($_SESSION['logged_in_user'])) {
		header('Location: practice_form.php');
		exit();
	}

	return['name' => $_SESSION['logged_in_user']];
}
session_start();
extract(pageController());
?>

<!DOCTYPE html>
<html>
<head>
	<title>Authorized Page</title>
</head>
<body>
<div>
	<h1>Welcome <?= $name; ?></h1>
</div>
<div>
	<a href="logout_page.php">Log out</a>
</div>
</body>
</html>