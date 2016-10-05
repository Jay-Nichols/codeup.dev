<?php

require_once 'classes.php';

echo Band::saying();
//instance of the Band class
$band1 = new Band("Guns N' Roses");

$band1->name = "Guns N' Roses";
$band1->genre = "Hard rock";
$band1->yearsActive = "1985 - present";
$band1->members = array('Axl Rose', 'Slash', 'Izzy Stradlin', 'Duff McKagan', 'Steven Adler');

echo $band1->name .PHP_EOL;
echo $band1->genre . PHP_EOL;
echo $band1->yearsActive . PHP_EOL;
echo implode(', ', $band1->members) . PHP_EOL;
echo $band1->tellMeSomethingAboutThem();

$band2 = new Band("Led Zeppelin");

$band2->name = "Led Zeppelin";
$band2->genre = "Hard rock";
$band2->yearsActive = "1969 - 1980";
$band2->members = ['Robert Plant', 'Jimmy Page', 'John Paul Jones', 'John Bonham'];


echo $band2->name .PHP_EOL;
echo $band2->genre . PHP_EOL;
echo $band2->yearsActive . PHP_EOL;
echo implode(', ', $band2->members) . PHP_EOL;
echo $band2->tellMeSomethingAboutThem();

$band3 = new Band("The Who");

$band3->name = "The Who";
$band3->genre = "Hard rock";
$band3->yearsActive = "1964 - present";
$band3->members = ['Roger Daltry', 'Pete Townshend', 'John Entwistle', 'Keith Moon'];

echo $band3->name .PHP_EOL;
echo $band3->genre . PHP_EOL;
echo $band3->yearsActive . PHP_EOL;
echo implode(', ', $band3->members) . PHP_EOL;
echo $band3->tellMeSomethingAboutThem();


echo Costume::message();

$costume1 = new Costume("halloween");

$costume1->occasion = "Halloween";
$costume1->type = "nurse";
$costume1->style = "sexy";

echo $costume1->occasion . PHP_EOL;
echo $costume1->type . PHP_EOL;
echo $costume1->style . PHP_EOL;
echo $costume1->somethingPositive() . PHP_EOL;

$costume2 = new Costume("being scared");

$costume2->occasion = "freaking out people";
$costume2->type = "clown";
$costume2->style = "scary";

echo $costume2->occasion . PHP_EOL;
echo $costume2->type . PHP_EOL;
echo $costume2->style . PHP_EOL;
echo $costume2->somethingPositive() . PHP_EOL;

