<?php

Class Bird
{
	public $genusName;
	public $speciesName;

	public function __construct($genusName, $speciesName)
	{
		$this->genusName = $genusName;
		$this->speciesName = $speciesName;
	}

	public function __destruct()
	{
		echo "{$this->genusName} {$this->speciesName} went extinct at " . time() . PHP_EOL;
	}

	public static $coolness = "All birds are cool";
	public static $birdFact = "All birds have feathers";

	public static function numberOfBirds()
	{
		return "There's billions of these guys and " . self::$birdFact;
	}

}

$owl = new Bird("Bubo", "virginianus");
echo "The great horned owl's scientific name is: {$owl->genusName} {$owl->speciesName}" . PHP_EOL;

$cardinal = new Bird("Cardinalis", "cardinalis");
echo "The cardinals scientific name is $cardinal->genusName $cardinal->speciesName" . PHP_EOL;

echo "Here's a true statement about birds: " . Bird::$coolness . PHP_EOL;
echo "Here's a fact about birds: " . Bird::$birdFact . PHP_EOL;
echo "How many birds are there? " . Bird::numberOfBirds() . PHP_EOL;

?>