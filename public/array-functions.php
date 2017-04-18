<?php
$randomArray1 = ["gregarious", "slug", "aeroplane", "the letter g", "tires", "televisions", "inclined planes", "robust", "sewers", "toxoplasmosis", "levitation"];
$randomArray2 =["pineapples", "columns", "exit signs", "pterodactyls", "olives", "turbulence", "focal dystonia"];
$randomAssociativeArray = ["Ben" => 34, "Greg" => 43, "Eliza" => 99];
print_r(array_chunk($randomArray, 3));
echo "Change case of all the keys" . PHP_EOL;
print_r(array_change_key_case($randomAssociativeArray, CASE_UPPER)) . PHP_EOL;
echo "Flip the keys and values" . PHP_EOL;
print_r(array_flip($randomAssociativeArray)) . PHP_EOL;
echo "Reverse the order" . PHP_EOL;
print_r(array_reverse($randomArray1)) . PHP_EOL;
print_r(array_reverse($randomArray2)) . PHP_EOL;



?>


<html>
<head>
	<title>Array Functions</title>

</head>
<body>

</body>
</html>