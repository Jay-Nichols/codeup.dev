<?php


// Define a class called President using the syntax taught above.
// Inside the curly braces of the class definition, add a public property called $name and set it equal to the string "Barack Obama".
// Then, define a public method inside the President class called greet which accepts one argument $name and returns something to the effect of "Hello INSERT_NAME_HERE, my name is Barack Obama, nice to meet you!"
// Now that you have defined your class, create an instance of that class (called an object) and store it in a variable called $us_president.
// Store the name of the $us_president into another variable called $president_name.
// Store the result of calling the greet method of $us_president with the argument "Donald" into the variable $greetings_from_president.


class President
{
	public $name = "Barack Obama";

	public function greet($name) 
	{
		echo "Hello INSERT_NAME_HERE, my name is $name, nice to meet you";  
	}

}

$us_president = new President;

$president_name = $us_president->name;

$us_president->greet("Donald Trump");




// Define a class called Person.
// Inside the Person class, declare (but do not define) the two public properties, called $first_name and $last_name respectively.
// Define a class constructor which accepts exactly two arguments in the following order, $first_name and $last_name. The argument $first_name should be stored into the $first_name property of the object being instantiated and the $last_name argument should be stored into the $last_name property of the object.
// Define a public method called get_full_name which accepts no arguments and returns the full name of the individual in the following format: "FIRST_NAME LAST_NAME". Please note that if the properties ($first_name and/or $last_name) of said object is modified after it is instantiated, your method get_full_name should return the updated full name, not the original full name of the individual.


class Person
{
	public $first_name;
	public $last_name;

	public function __construct($first_name, $last_name) 
	{
		$this->first_name = $first_name;
		$this->last_name = $last_name;
	}

	public function get_full_name()
	{
		echo "$first_name" . " " . "$last_name"; 
	}

}

$person1 = new Person("Jay", "Nichols");

$person1->get_full_name();