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
		echo "Hello $this->name, my name is $name, nice to meet you";  
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
		echo "$this->first_name" . " " . "$this->last_name"; 
	}

}

$person1 = new Person("Jay", "Nichols");

$person1->get_full_name();




// Copy your working solution to the first Kata of this series and paste it here (you may want to complete that first if you haven't already done so).
// Rename that class to CurrentUSPresident.
// Convert all of the class properties into class constants and all of the class methods into static methods using the syntax taught in the lesson.
// You can safely remove the code where an instance of the President class is created.

class CurrentUSPresident
{
	const name = "Barack Obama";

	public static function greet($name) 
	{
		echo "Hello " . self::name . ", my name is $name, nice to meet you";  
	}

}

echo CurrentUSPresident::name;
CurrentUSPresident::greet("Donald Trump");


// Define a class called Person.
// Since all Persons are of the species "Homo Sapiens", make that a class constant
// Declare (but do not define yet) the 3 class properties $name, $age and $occupation. They should all be public.
// Define a class constructor which accepts exactly three arguments in the following order: $name, $age, $occupation and store them in their respective properties.
// Define a method called introduce which accepts no arguments and returns a string of the format "Hello, my name is NAME_HERE"
// Define another method called describe_job which accepts no arguments and returns a string of the format "I am currently working as a(n) OCCUPATION_HERE" (NOTE: The "a(n)" part of the string is literal which means you do not have to create conditionals to check whether "a" or "an" should be used.)
// When extraterrestrials arrive on Earth, all Persons are expected to greet them in exactly the same way. Therefore, define a static class method called greet_extraterrestrials which accepts an argument $species and returns a string of the format "Welcome to Planet Earth SPECIES_NAME_HERE!"

Class Persons
{
	const species = "Homo Sapiens";

	public $name;
	public $age;
	public $occupation;

	public function __construct($name, $age, $occupation)
	{
		$this->name = $name;
		$this->age = $age;
		$this->occupation = $occupation;
	}

	public function introduce()
	{
		echo "Hello, my name is $name";
	}

	public function describe_job()
	{
		echo "I am currently working as a(n) $this->occupation";
	}

	public static function greet_extraterrestrials()
	{
		echo "Welcome to planet Earth" . " " . self::species;
	}

}
$new_person = new Persons("Jay", "37", "future lottery winner");
Persons::greet_extraterrestrials();


class Salesman extends Persons
{
	public function __construct($name, $age)
	{
		parent::__construct($name, $age, "salesman");
	}
	public function introduce()
	{
		return parent::introduce() . ", don't forget to check out my products!";
	}

}

class ComputerProgrammer extends Persons
{
	public function __construct($name, $age)
	{
		parent::__construct($name, $age, "computer programmer");
	}
	public function describe_job()
	{
		return parent::describe_job() . ", don't forget to check out my Codewars account ;)";
	}
}

class WebDeveloper extends ComputerProgrammer
{
	public function __construct($name, $age)
	{
		parent::__construct($name, $age, "web developer");
	}
	public function describe_job()
	{
		return parent::describe_job() . " And don't forget to check on my website :D";
	}
	public function describe_website()
	{
		return "My professional world-class website is made from HTML, CSS, Javascript and PHP!";
	}
}

//visibility / get and set functions
Class Persons
{
	protected $name;
	protected $age;
	protected $occupation;

	public function __construct($name, $age, $occupation)
	{
		$this->name = $name;
		$this->age = $age;
		$this->occupation = $occupation;

		if (!is_string($name)) {
			throw new Exception("Name must be a string!");
		}

		if (is_int($age) && $age < 0) {
			throw new Exception("Age must be a non-negative integer!");
		}

		if (!is_string($occupation)) {
			throw new Exeption("Occupation must be a string!");
		}
	}

	public function get_name() 
	{
		return $name;
	}

	public function get_age() 
	{
		return $age;
	}

	public function get_occupation() 
	{
		return $occupation;
	}

	public function set_name($name)
	{
		if (is_string($name)) {
			return $name;
		} else {
			throw new Exception("Name must be a string!");
		}
	}

	public function set_age($age)
	{
		if (is_int($age) && $age > 0) {
			return $age;
		} else {
			throw new Exception("Age must be a non-negative integer!");
		}
	}

	public function set_occupation($occupation)
	{
		if (is_string($occupation)) {
			return $occupation;
		} else {
			throw new Exception("Occupation must be a string!");
		}
	}

}



//using final keyword


Class Persons
{
	const species = "Homo Sapiens";

	public $name;
	public $age;
	public $occupation;

	public function __construct($name, $age, $occupation)
	{
		$this->name = $name;
		$this->age = $age;
		$this->occupation = $occupation;
	}

	public function introduce()
	{
		echo "Hello, my name is $name";
	}

	final public function describe_job()
	{
		echo "I am currently working as a(n) $this->occupation";
	}

	final public static function greet_extraterrestrials()
	{
		echo "Welcome to planet Earth" . " " . self::species;
	}

}

Class ComputerProgrammer extends Persons
{
	public function introduce()
	{
		echo "Hello, my name is $name, and I am a $occupation";
	}
} 

// working with interfaces

interface CanFly
{
	public function fly();
}

interface CanSwim
{
	public function swim();
}

interface CanClimb 
{
	public function climb();
}

interface CanGreet
{
	public function greet($name);
	
}

interface CanIntroduce
{
	public function speak();
	public function introduce();
}

interface CanSpeak
{
	public function speak();
}

Class Bird implements CanFly
{
	public $name;
	public function fly()
	{
		echo "I am flying";
	}

	public function __construct($name)
	{
		$this->name = $name;
	}

	public function chirp()
	{
		echo "Chirp chirp";
	}
}

Class Duck extends Bird implements CanFly, CanSwim
{
	public function __construct()
	{
		echo $this->name = $name;
	}

	
	public function chirp()
	{
		echo "Chirp chirp";
	}

	public function swim()
	{
		echo "Splash! I am swimming";
	}
}

Class Cat implements CanClimb
{
	public function climb()
	{
		echo "Look, I'm climbing a tree";
	}

	public function meow()
	{
		echo "Meow, meow";
	}

	public function play($name)
	{
		echo "Hey " . $name . ", lets' play!";
	}
}

Class Dog implements CanSwim, CanGreet
{
	public function swim()
	{
		echo "I'm swimming, woof woof";
	}

	public function greet($name)
	{
		echo "Hello " . $name . ", welcome to my home";

	}

	public function bark()
	{
		echo "Woof woof";
	}
}

Class Person implements CanGreet, CanIntroduce
{
	public $name;
	public $age;
	public $occupation;

	public function greet($name)
	{
		echo "Hello " . $name . ", welcome to my home";
	}

	public function speak()
	{
		echo "What am I supposed to say again?";
	}

	public function introduce()
	{
		echo "Hello, my name is " . $name . ", I am " . $age . " years old and I am currently working as a(n) " . $occupation;
	}
}
