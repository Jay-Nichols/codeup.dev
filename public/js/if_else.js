"use strict"

var grade = (70 + 80 + 95) / 3;


if (grade >= 80) {
	console.log("You're awesome.");
} else {
	console.log("You need to practice more.");
}




var discountPrice = .35;
var ryan = 250;
var cameron = 180;
var george = 320;

if (ryan >= 200) {
	var newPrice = ryan * .35
	console.log("Ryan pays " + newPrice); 
} else {
	console.log("Ryan pays " + ryan);
}

if (cameron >= 200) {
	var newPrice1 = cameron * .35
	console.log("Cameron pays " + newPrice1);
} else {
	console.log("Cameron pays " + cameron);
}

if (george >= 200) {
	var newPrice2 = george * .35
	console.log("George pays " + newPrice2);
}	else {
	console.log("George pays " + george);
}




var flipACoin = Math.floor(Math.random()* 2)

if (flipACoin == 1) {
	console.log("Buy a house");
} else {
	console.log("Buy a car");
}

var flipACoin = (1) ? console.log("Buy a house") : console.log("Buy a car.")
