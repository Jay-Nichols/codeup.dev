<?php
date_default_timezone_set("America/Chicago");

$julyFourth = strtotime("July 04");
$countdownToBirthday = ceil(($julyFourth - time()) / 60/60/24);

?>

<html>
<head>
	<title>Time and Date</title>
</head>
<body>
	<h1>Different date formats:</h1>
	<p>Today's date is: <?= date("Y/m/d"); ?></p>
	<p>Today's date is: <?= date("d/m/Y"); ?></p>
	<p>Today's date is: <?= date("d-m-Y"); ?></p>
	<p>Today's date is: <?= date("d-m-Y"); ?> and the day of the week is <?= date("l"); ?></p>
	<p>Today is <?= date("l"); ?></p>
	<div>&copy; <?= date("Y"); ?></div>

	<h1>Time</h1>
	<p>The time is <?= date("h:ma") ?></p>
	<p>The time is <?= date("h:m:sa") ?></p>

	<h3>There are <?= $countdownToBirthday; ?> days until my birthday.	</h3>

	

</body>
</html>