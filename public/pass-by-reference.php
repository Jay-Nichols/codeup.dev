<?php

//practicing passing by reference



//not passing by reference. $word stays the same
function addWord(&$w) {
	$w .= "World";
}

$word = "Hello ";

addWord($word);

echo $word . PHP_EOL;



function addNumber(&$add) {
	$add += 3;
}

$someNumber = 9;

addNumber($someNumber);

echo $someNumber . PHP_EOL;

