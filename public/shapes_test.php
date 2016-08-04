<?php
require_once "Rectangle.php";
require_once "Square.php";

$areaOfRectangle = new Rectangle(3, 4);
echo $areaOfRectangle->area() . PHP_EOL;
// echo $rectangle->perimeter() . PHP_EOL;
$perimeter = new Square(3, 4);
echo $areaOfRectangle->area() . PHP_EOL;
echo $perimeter->perimeter() . PHP_EOL;

// $rectangle = new Square(4, 7);
// echo $rectangle->area() . PHP_EOL;
// echo $rectangle->perimeter() . PHP_EOL;

// $rectangle = new Square(58, 12);
// echo $rectangle->area() . PHP_EOL;
// echo $rectangle->perimeter() . PHP_EOL;


