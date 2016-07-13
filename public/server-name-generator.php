<?php

$adjectiveArray = ['Clumsy', 'Sickly', 'Drunk', 'Orange', 'Tiresome', 'Annoying', 'Amateur', 'Exciting', 'Spicy', 'Taciturn'];
$nounArray = ['Horse', 'Reebok', 'Florida', 'Brick', 'Stationery', 'Volkswagon', 'Mattress', 'Guitar', 'Air-Conditioner', 'Kettle Bell'];

function shuffleAdjective($adjective) {
	shuffle($adjective);
	return $adjective[0];
}

function shuffleNoun($noun) {
	shuffle($noun);
	return $noun[0];
}

$randomAdjective = shuffleAdjective($adjectiveArray);
$randomNoun = shuffleNoun($nounArray);

$serverName = "{$randomAdjective} {$randomNoun}";

?>
<!DOCTYPE html>
<html>
<head>
	<title>Server Name Generator</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="/css/server-name-generator.css">
</head>
<body>
	<h1 id="header">Server Name Generator</h1>
	<h1 id="serverName"><?= $serverName; ?></h1> 

</body>
</html>