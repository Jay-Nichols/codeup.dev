<?php

$hello = "<h1>Hello</h1>";
$filtered = filter_var($hello, FILTER_SANITIZE_STRING);

$someNumber = -20;

$ip = "127.0.0.1";

$emailAddress = 'jaynichols@jaynichols.info';
$filteredEmail = filter_var($emailAddress, FILTER_SANITIZE_EMAIL);

$url = "https://www.youtube.com";
$filteredUrl = filter_var($url, FILTER_SANITIZE_URL);

?>

<!DOCTYPE html>
<html>
<head>
	<title>More Filters</title>
</head>
<body>
	<div><?= $filtered ?></div>

	<?php if (filter_var($someNumber, FILTER_VALIDATE_INT) === 0 || !filter_var($someNumber, FILTER_VALIDATE_INT) === false): ?>
    	<p><?= "Integer $someNumber is valid"; ?><p>
	<?php else: ?>
    	<p><?= "Integer $someNumber is not valid"; ?></p>
	<?php endif ?>

	<?php if (!filter_var($ip, FILTER_VALIDATE_IP) === false): ?>
		<p><?= "$ip is a valid IP address."; ?></p>
	<?php else: ?>
		<p><?="$ip is not a valid IP address."; ?></p>
	<?php endif ?>

	<?php if (!filter_var($filteredEmail, FILTER_VALIDATE_EMAIL) === false): ?>
		<p><?= "$filteredEmail is a valid email address."; ?></p>
	<?php else: ?>
		<p><?= "$filteredEmail is not a valid email address."; ?></p>
	<?php endif ?>

	<?php if (!filter_var($filteredUrl, FILTER_VALIDATE_URL) === false): ?>
		<p><?= "$filteredUrl is a valid URL."; ?></p>
	<?php else: ?>
		<p><?= "$filteredUrl is not a valid URL."; ?></p>
	<?php endif ?>

	

</body>
</html>