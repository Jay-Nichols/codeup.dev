<?php
require "functions.php";

function pageController() {
	if (inputHas('count')) {
		$count = inputGet('count');
	} else {
		$count = 0;
	}
	return ['count' => $count];
}

extract(pageController());

?>


<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h1>PING</h1>
	<h2><a href="pong.php?count=<?= $count +1; ?>">HIT</a></h2>
	<h2><a href="ping.php">MISS</a></h2>
	<h2>COUNTER: <?= $count; ?></h2>

</body>
</html>