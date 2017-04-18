<?php

$famousThreePieceBands = array(
	"Cream" => array("Bass" => "Jack Bruce", "Drums" => "Ginger Baker", "Guitar" => "Eric Clapton"),
	"Nirvana" => array("Bass" => "Krist Novoselic", "Drums" => "Dave Grohl", "Guitar" => "Kurk Cobain"),
	"Rush" => array("Bass" => "Geddy Lee", "Drums" => "Neil Peart", "Guitar" => "Alex Lifeson")
);

?>

<html>
<head>
	<title>Multidimensional Arrays</title>
</head>
<body>
	<h1>Multidimensional Arrays</h1>
	<h2>Arrays within an Array</h2>

	<?php foreach ($famousThreePieceBands as $band => $members): ?>
		<h3><?= $band; ?></h3>
		<p>Bass: <?= $members["Bass"]; ?></p>
		<p>Guitar: <?= $members["Guitar"]; ?></p>
		<p>Drums: <?= $members["Drums"]; ?></p>
		
	<?php endforeach; ?>
</body>
</html>