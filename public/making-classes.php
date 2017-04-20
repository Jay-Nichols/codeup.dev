<?php 

class Ramones 
{
	public $guitarist = "Johnny";
	public $bassist = "Dee Dee";
	public $drummer = "Tommy";
	public $singer = "Joey";

	public function saying() 
	{
		return "Gabba gabba hey!";
	}
}

$ramones = new Ramones();
echo $ramones->saying() . PHP_EOL;

class SanAntonio
{
	public $name;
	public $partOfTown;
	public $favoriteThing;
	public $food = array();

	public function fiesta()
	{
		return $this->name . " from " . $this->partOfTown . " is going to fiesta." . PHP_EOL;
	}

	public function hobby()
	{
		return $this->name . " likes " . $this->favoriteThing . "." . PHP_EOL; 
	}

	public function addFood($food)
	{
		$this->$food[] = $food;
		$foodString = implode(", ", $this->$food);
		return $this->name . " likes to eat: " . $foodString;
	}
}

$jay = new SanAntonio();
$jay->name = "Jay Nichols";
$jay->partOfTown = "Castle Hills";
$jay->favoriteThing = "playing guitar";
echo $jay->fiesta();
echo $jay->hobby();
$jay->addFood("pizza");
$jay->addFood("lasagna");
echo $jay->addFood();

?>