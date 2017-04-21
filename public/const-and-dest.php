<?php

Class Animal {
	public $genusName;
	public $speciesName;
	public $respirationType = "aerobic";
	public $cellWalls = "No";

	public function __construct($genusName, $speciesName)
	{
		$this->genusName = $genusName;
		$this->speciesName = $speciesName;
	}
	public function __destruct()
	{
		echo "{$this->genusName} {$this->speciesName} went extinct at " . time() . PHP_EOL;
	}

}

Class Bird extends Animal
{
	public $commonName;

	public function __construct($genusName, $speciesName, $commonName)
	{
		parent::__construct($genusName, $speciesName);
		$this->commonName = $commonName;
	}

	public function birdName()
	{
		return $this->commonName;
	}



	public static $coolness = "All birds are cool";
	public static $birdFact = "All birds have feathers";



	public static function numberOfBirds()
	{
		return "There's billions of these guys and " . self::$birdFact . " and " . self::$coolness;
	}

}

$owl = new Bird("Bubo", "virginianus", "great horned owl");
echo "The {$owl->birdName()}'s scientific name is: {$owl->genusName} {$owl->speciesName}" . PHP_EOL;

$cardinal = new Bird("Cardinalis", "cardinalis", "cardinal");
echo "The {$cardinal->birdName()}'s scientific name is $cardinal->genusName $cardinal->speciesName" . PHP_EOL;

echo "Here's a true statement about birds: " . Bird::$coolness . PHP_EOL;
echo "Here's a fact about birds: " . Bird::$birdFact . PHP_EOL;
echo "How many birds are there? " . Bird::numberOfBirds() . PHP_EOL;
echo "Owl's respirationType is: $owl->respirationType" . PHP_EOL;
echo "Do cardinals' cells have cell walls? $cardinal->cellWalls" . PHP_EOL;

?>