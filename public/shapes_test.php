<?php
require_once "Rectangle.php";
require_once "Square.php";

$areaOfRectangle = new Rectangle(3, 4);
echo "The area using Rectangle class is: " . $areaOfRectangle->area() . PHP_EOL;
// echo $rectangle->perimeter() . PHP_EOL;
$usingSquareClass = new Square(3, 5);
echo "The area using Square class is: " . $usingSquareClass->area() . PHP_EOL;
echo "The perimeter using Square class is: " . $usingSquareClass->perimeter() . PHP_EOL;

$usingRectangleClass = new Rectangle(5, 10);
echo "The perimeter using Rectangle class is: " . $usingRectangleClass->perimeter() . PHP_EOL;
var_dump($usingRectangleClass);
var_dump($usingRectangleClass->width);



// $rectangle = new Square(4, 7);
// echo $rectangle->area() . PHP_EOL;
// echo $rectangle->perimeter() . PHP_EOL;

// $rectangle = new Square(58, 12);
// echo $rectangle->area() . PHP_EOL;
// echo $rectangle->perimeter() . PHP_EOL;


