"use strict";
 // TODO: Fill in your name here.

 (function () {
 	var myNameIs = 'Bob';

	
	function sayHello(name) {
	console.log("Hello from " + name);

	}


	sayHello(myNameIs);
// TODO:
// Create a function called 'sayHello' that takes a parameter 'name'.
// When called, the function should log a message that says hello from the passed in name.

// TODO: Call the function 'sayHello' passing the variable 'myNameIs' as a parameter.

// Don't modify the following line
// It genera

	var random = Math.floor((Math.random()*100)+1);

	function isOdd(number) {
	
	(random % 2 == 1) ? console.log(number + " is odd") : console.log(number + " is even.");
	}

	isOdd(random);

}) ();

 
