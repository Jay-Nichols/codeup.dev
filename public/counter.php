<?php

// $i = 0;

// $test = $i++;

function pageController() {
	if (isset($_GET['count'])) {
		$count = $_GET['count'];
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
	<title>Contacts</title>
</head>
<body>
	<h1><a href="counter.php?count=<?= $count+1; ?>">UP</a></h1>
	<h1><a href="counter.php?count=<?= $count-1; ?>">DOWN</a></h1>
	<h1>Counter: <?= $count; ?></h1>

</body>
</html>


