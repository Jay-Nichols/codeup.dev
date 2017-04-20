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

}

$owl = new Bird("Bubo", "virginianus");
echo "The great horned owl's scientific name is: {$owl->genusName} {$owl->speciesName}" . PHP_EOL;

$cardinal = new Bird("Cardinalis", "cardinalis");
echo "The cardinals scientific name is $cardinal->genusName $cardinal->speciesName" . PHP_EOL;

?>