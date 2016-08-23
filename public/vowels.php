<?php

$letters = ['a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i'];
$vowels = ['a', 'e', 'i', 'o', 'u'];

function removeVowels($letters, $vowels) {
	foreach ($letters as $letter) {
		foreach($vowels as $vowel) {
			if ($letter[$i] == $vowel[$i]) {
				unset($letter[$i]);
				$lettersAsString = implode(', ', $letters);
			}			
		}
	}
	return $lettersAsString;
};

$newArray = removeVowels($letters, $vowels);

?>

<!DOCTYPE html>
<html>
<head>
	<title>Vowels</title>
</head>
<body>
	<h1><?= $newArray; ?></h1>

</body>
</html>