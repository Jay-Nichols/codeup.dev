<?php

Class Band 
{
	public function __construct($name) 
	{
		echo "------------" . PHP_EOL . "Here's some info on: " . $this->name = $name . PHP_EOL . "------------" . PHP_EOL;
	}
	public function __destruct()
	{
		echo "I finished talking about {$this->name} at " . date('Y-m-d H:i:s') . PHP_EOL;
	}

	public $name;
	public $genre;
	public $yearsActive;
	public $members = [];

	public function tellMeSomethingAboutThem()
	{
		return implode(', ', $this->members) . " are the members of " . $this->name . "." . PHP_EOL;
	}
	public static function saying()
	{
		return "-----------" . PHP_EOL . "All of these bands rock!" . PHP_EOL . "--------------";
	}

}

Class Costume 
{
	public function __construct($occasion)
	{
		echo "-----------" . PHP_EOL . "Everybody loves " . $this->occasion = $occasion . PHP_EOL . "------------" . PHP_EOL;
	}
	public function __destruct()
	{
		echo "I finished talking about {$this->occasion} at " . date('Y-m-d H:i:s') . PHP_EOL;
	}

	public $occasion;
	public $type;
	public $style;

	public function somethingPositive()
	{
		return $this->style . " " . $this->type ." is a good costume for " . $this->occasion . "."; 
	}

	public static function message()
	{
		return "-----------" . PHP_EOL . "You can't go wrong with these costume ideas" . PHP_EOL . "--------------";
	}

}