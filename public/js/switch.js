"use strict";


var luckyNumber = Math.floor(Math.random()* 6)

var price = 60;



switch (luckyNumber) {
	case 0:
		console.log("You get no discount.");
		break;
	case 1:
		console.log("You pay " + (price - (price * .1)));
		break;
	case 2:
		console.log("You pay " + (price - (price * .25)));
		break;
	case 3:
		console.log("You pay " + (price - (price * .35)));
		break;
	case 4:
		console.log("You pay " + (price - (price * .50)));
		break;
	case 5:
		console.log("You get it for free.");
		break;
}

var luckyNumber = Math.floor(Math.random()* 12)

switch (luckyNumber) {
	case 1:
	console.log("January");
	break;
	case 2:
	console.log("February");
	break;
	case 3:
	console.log("March");
	break;
	case 4:
	console.log("April");
	break;
	case 5:
	console.log("May");
	break;
	case 6:
	console.log("June");
	break;
	case 7:
	console.log("July");
	break;
	case 8:
	console.log("August");
	break;
	case 9:
	console.log("September");
	break;
	case 10:
	console.log("October");
	break;
	case 11:
	console.log("November");
	break;
	case 12:
	console.log("December");
	break;
}



