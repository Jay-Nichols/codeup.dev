"use strict";
var names = '';
while (names == '') {
	names = prompt('What is your name?');
}

alert("Welcome, " + names)



var pizza = confirm("Do you like pizza");

if (pizza) {
	alert("I also like pizza, " + names);
} else {
	alert("Pizza isn't for everybody, " + names);
}
//var response = alert('Welcome ' + );

//var pizza = confirrm('Do you like pizza?');



// TODO: Ask the user for their name.
//       Keep asking if an empty input is provided.

// TODO: Show an alert message that welcomes the user based on their input.

// TODO: Ask the user if they like pizza.
//       Based on their answer show a creative alert message.