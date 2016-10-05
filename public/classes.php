<?php

Class Band 
{
	public $name;
	public $genre;
	public $yearsActive;
	public $members = [];

	public function tellMeSomethingAboutThem()
	{
		return implode(', ', $this->members) . " are the members of " . $this->name . "." . PHP_EOL;
	}

}

Class Costume 
{
	public $occasion;
	public $type;
	public $style;

	public function somethingPositive()
	{
		return $this->style . " " . $this->type ." is a good costume for " . $this->occasion . "."; 
	}

}