<?php

$array = ['e', 'a', 'g', 'c', 'i', 'd', 'f', 'b', 'h'];

function alphabetized($array) {

	asort($array);
	return $array;

}

$alphabetizedArray = alphabetized($array);

?>

<html>
<head>
	<title>practice</title>
</head>
<body>
	<h1><?php echo $alphabetizedArray; ?></h1>
</body>
</html>