'use strict';

// The Western Suburbs Croquet Club has two categories of membership, Senior and Open. They would like your help with an application form that will tell prospective members which category they will be placed.

// To be a senior, a member must be at least 55 years old and have a handicap greater than 7. In this croquet club, handicaps range from -2 to +26; the better the player the lower the handicap.

// Input

// Input will consist of a list of lists containing two items each. Each list contains information for a single potential member. Information consists of an integer for the person's age and an integer for the person's handicap.

// Example Input

// [[18, 20],[45, 2],[61, 12],[37, 6],[21, 21],[78, 9]]
// Output

// Output will consist of a list of string values (in Haskell: Open or Senior) stating whether the respective member is to be placed in the senior or open category.

// Example Output

// ["Open", "Open", "Senior", "Open", "Open", "Senior"]


function openOrSenior(data){
	var dataArray = data;
	var resultsArray = [];
	dataArray.forEach(function (element) {
	if (element[0] >= 55 && element[1] > 7) {
		resultsArray.push('Senior');
	} else {
		resultsArray.push('Open');
	}
	});
	console.log(resultsArray);
}

openOrSenior([[18, 20],[45, 2],[61, 12],[37, 6],[21, 21],[78, 9]]);


// Personalized greeting

// Create a function that gives a personalized greeting. This function takes two parameters: name and owner.

// Use conditionals to return the proper message:

// case	return
// name equals owner	'Hello boss'
// otherwise	'Hello guest'

function greet (name, owner) {
	if (name == owner) {
		console.log("Hello boss");
	} else {
		console.log("Hello guest");
	}
}

greet('Daniel', 'Daniel');
greet('Greg', 'Daniel');



// Implement a function named generateRange(min, max, step), which takes three arguments and generates a range of integers from min to max, with the step. The first integer is the minimum value, the second is the maximum of the range and the third is the step. (min < max)

// Task

// Implement a function named

// generateRange(2, 10, 2) // should return array of [2,4,6,8,10]
// generateRange(1, 10, 3) // should return array of [1,4,7,10]
// , which takes three arguments and generates a range of integers from min to max, with given step. The first is minimum value, second is maximum of range and the third is step.

// Note

// min < max
//step > 0

function generateRange(min, max, step){
	var numberArray = []
	for (var i = min; i <= max; i += step) {
		numberArray.push(i);
	}
	console.log(numberArray);

}

generateRange(2, 10, 2);



// Basic regex tasks. Write a function that takes in a numeric code of any length. The function will check if the code begins with 1, 2, or 3 and return true if so. Return false otherwise.

// You can assume the input will always be a number.

function validateCode(code) {
	var codeArray = code.toString();
	console.log(codeArray);
	var splitArray = codeArray.split("");
	console.log(splitArray);
	if (splitArray[0] == 1 || splitArray[0] == 2 || splitArray[0] == 3) {
		console.log("true");
	} else {
		console.log("false");
	}
	
}

validateCode(123);
validateCode(248);
validateCode(8);


// Can you find the needle in the haystack?

// Write a function findNeedle() that takes an array full of junk but containing one "needle"

// After your function finds the needle it should return a message (as a string) that says:

// "found the needle at position " plus the index it found the needle

// So

// findNeedle(['hay', 'junk', 'hay', 'hay', 'moreJunk', 'needle', 'randomJunk'])
// should return

// 'found the needle at position 5'

function findNeedle(haystack) {
		haystack.forEach(function (needle, index) {
			if (needle === 'needle') {
			console.log("found the needle at position " + index);
			}
	});
}



findNeedle(['3', '123124234', undefined, 'needle', 'world', 'hay', 2, '3', true, false]);
findNeedle(['283497238987234', 'a dog', 'a cat', 'some random junk', 'a piece of hay', 'needle', 'something somebody lost a while ago']);
findNeedle([1,2,3,4,5,6,7,8,8,7,5,4,3,4,5,6,67,5,5,3,3,4,2,34,234,23,4,234,324,324,'needle',1,2,3,4,5,5,6,5,4,32,3,45,54]);


// Take a sentence (string) and reverse each letter in each word in the sentence. Do not reverse the order of the words, just the letters in each word.

// Assume there is no punctuation. String will always be defined.

// Example: A fun little challenge => 'A nuf elttil egnellahc'

// Addendum: Your function receives a writeable null-terminated string.

// Mutate the string in-place and return the sentence.

// For this kata, you are not required to allocate or de-allocate any memory.

// reverse the letters in the sentence
function reverser(sentence) {
	console.log(sentence.split("").reverse().join("").split(" ").reverse().join(" "));

}


reverser("Hi mom");
reverser("friendzone");


// The Lazy Startup Office

// A startup office has an ongoing problem with its bin. Due to low budgets, they don't hire cleaners. As a result, the staff are left to voluntarily empty the bin. It has emerged that a voluntary system is not working and the bin is often overflowing. One staff member has suggested creating a rota system based upon the staff seating plan.

// Create a function binRota that accepts a 2D array of names. The function will return a single array containing staff names in the order that they should empty the bin.

// Adding to the problem, the office has some temporary staff. This means that the seating plan changes every month. Both staff members' names and the number of rows of seats may change. Ensure that the function binRota works when tested with these changes.

// Notes:

// All the rows will always be the same length as each other.
// There will be no empty spaces in the seating plan.
// There will be no empty arrays.
// Each row will be at least one seat long.

function binRota(arr){
	
	for (var i = 0; i < arr.length; i++) {
		if (arr[i] % 2 == 0) {
			arr.forEach(function (name) {
			console.log(name);			
			})
		} else {
			arr.forEach(function (name) {
			console.log(name.reverse());	
			})
		}
	}		
}

binRota([["Bob","Nora"],["Ruby","Carl"]]);
binRota([["Billy"]]);
binRota([["Billy", "Nancy"]]);
binRota([["Billy"],["Megan"],["Aki"],["Arun"],["Joy"]]);
binRota([["Sam","Nina","Tim","Helen","Gurpreet","Edward","Holly","Eliza"],["Billy","Megan","Aki","Arun","Joy","Anish","Lee","Maryan"],["Nick","Josh","Pete","Kavita","Daisy","Francesca","Alfie","Macy"]]);
binRota([["Stefan","Raj","Marie"],["Alexa","Amy","Edward"],["Liz","Claire","Juan"],["Dee","Luke","Elle"]]);



// Given and array of integers (x), return the result of multiplying the values together in order. Example:

// [1, 2, 3] --> 6

// For the beginner, try to use the reduce method - it comes in very handy quite a lot so is a good one to know.

// Array will not be empty.


function grow(x){
	x.reduce(function (y, z) {
		console.log(y * z);
	});

}

grow([1, 2, 3]);
grow([4, 1, 1, 1, 4]); 
grow([2, 2, 2, 2, 2, 2]); 


// You received a whatsup message from an unknown number. Could it be from that girl/boy with a foreign accent you met yesterday evening?

// Write a simple regex to check if the string contains the word hallo in different languages.

// These are the languages of the possible people you met the night before:

// hello - english
// ciao - italian
// salut - french
// hallo - german
// hola - spanish
// ahoj - czech republic
// czesc - polish
// By the way, how cool is the czech republic hallo!!

// PS. you can assume the input is a string. PPS. to keep this a beginner exercise you don't need to check if the greeting is a subset of word ('Hallowen' can pass the test)

// PS. regex should be case insensitive to pass the tests

function validateHello(greetings) {
	switch (greetings){
		case 'hello':
			console.log(true);
			break;
		case 'ciao':
			console.log(true);
			break;
		case 'salut':
			console.log(true);
			break;
		case 'hallo':
			console.log(true);
			break;
		case 'hola':
			console.log(true);
			break;
		case 'ahoj':
			console.log(true);
			break;
		case 'czesc':
			console.log(true);
		default:
			console.log(false);

	}
}


validateHello('ahoj');

validateHello('meh');


// Welcome. In this kata, you are asked to square every digit of a number.

// For example, if we run 9119 through the function, 811181 will come out.

// Note: The function accepts an integer and returns an integer

function squareDigits(num) {
	var numberString = num.toString();
	var numbersWithCommas = numberString.split('');
	console.log(numbersWithCommas);
	numbersWithCommas.forEach(function (element) {
			var squaredNumber = (parseInt(element) * parseInt(element));
			console.log(squaredNumber);
	})
}

squareDigits(9119);



// x Simple, given a string of words, return the length of the shortest word(s).

// String will never be empty and you do not need to account for different data types.



function findShort(s){
	var emptyArray = [];
	var stringInArray = s.split(" ");
	console.log(stringInArray);
	for (var i = 0; i < stringInArray.length; i++) {
		var elementLength = stringInArray[i].length;
		console.log(elementLength);
		var toString = elementLength.toString();
		console.log(toString);
		var stringWithCommas = toString.split();
		console.log(stringWithCommas);
		var pushedArray = emptyArray.push(stringWithCommas);
		console.log(pushedArray); 
		
	}
}

findShort("bitcoin take over the world maybe who knows perhaps");
findShort("turns out random test cases are easier than writing out basic ones");



// Ben has a very simple idea to make some profit: he buys something and sells it again. Of course, this wouldn't give him any profit at all if he was simply to buy and sell it at the same price. Instead, he's going to buy it for the lowest possible price and sell it at the highest.

// Task

// Write a function that returns both the minimum and maximum number of the given list/array.

function minMax(arr){
	console.log("--------");
  var resultsArray = [];
  var inNumericOrder = arr.sort(function(a,b) {
  	return a - b;
  });
  console.log(inNumericOrder);
  var lowestNumber = inNumericOrder[0];
  console.log(lowestNumber);
  var highestNumber = inNumericOrder[inNumericOrder.length - 1];
  console.log(highestNumber);
  var bothNumbers = lowestNumber + "," + highestNumber;
  console.log(bothNumbers);
  var highLow = resultsArray.push(bothNumbers);
  console.log(highLow);

}

minMax([5,2,8,67,9]);
minMax([2348910,5]);


// Write a function which removes from string all non-digit characters and parse the remaining to number. E.g: "hell5o wor6ld" -> 56

function getNumberFromString(s) {
	console.log("--------");
	console.log(Number(s.replace(/\D/g, "")));

}

getNumberFromString("1");
getNumberFromString("123");
getNumberFromString("this is number: 7");



// Write a function, calculateTip(amount, rating) which calculates how much you need to tip based on the total amount of the bill and the service.

// You need to consider the following ratings:

// Terrible: tip 0%
// Poor: tip 5%
// Good: tip 10%
// Great: tip 15%
// Excellent: tip 20%
// The rating is case insensitive. If an unrecognised rating is input, then you need to return:

// "Rating not recognised" in Javascript, Python and Ruby...
// ...or null in Java
// Because you're a nice person, you always round up the tip, regardless of the service.


function calculateTip(amount, rating) {
	switch (rating) {
		case 'Terrible':
			console.log(Math.ceil(amount * 0));
			break;
		case 'Poor':
			console.log(Math.ceil(amount * .05));
			break;
		case 'Good':
			console.log(Math.ceil(amount * .10));
			break;
		case 'Great':
			console.log(Math.ceil(amount * .15));
			break;
		case 'Excellent':
			console.log(Math.ceil(amount * .20));
			break;
		default: 
			console.log("Rating not recognized");

	}
}

calculateTip(20, "Excellent");
calculateTip(26.95, "Good");


// Rammstein needs a certain amount of fuel to create the fiery spectacle that is a Rammstein show. They need 100 hours for their new tour.

// The input will be two variables: concentration of fuel (named concentration) and the number of barrels they have (named barrels). To get the number of hours of fuel Rammstein has available multiply the barrels by concentration.

// If the number of hours of fuel available is less than 100, output should be a string "(number of hours of fuel needed to equal 100) Stunden mehr Benzin benötigt."
// For example if you need five more hours the string should be "5 Stunden mehr Benzin benötigt." (this means 5 more hours of gasoline are needed in English)
// If the number of hours of fuel is exactly 100, output should be a string that says "Perfekt!"
// If the number of hours of fuel is more than 100, output should be the number of extra hours of fuel.
// Help Rammstein so the show can go on!

function feuerFrei(concentration, barrels) {
	var hoursOfFuel = concentration * barrels;
	var hoursOfFuelNeeded = 100 - hoursOfFuel;
  if (hoursOfFuel < 100) {
  	console.log(hoursOfFuelNeeded + " Stunden mehr Benzin benötigt.")
  } else if (hoursOfFuel > 100) {
  	console.log(hoursOfFuel);
  } else {
  	console.log("Perfekt");
  }
}



feuerFrei(5,20);
feuerFrei(5,200);
feuerFrei(3,20);
 

 // Create a function that takes an integer as an argument and returns "Even" for even numbers or "Odd" for odd numbers.

 function even_or_odd(number) {
 	if (number % 2 == 0) {
 		console.log("Even");
 	} else {
 		console.log("Odd");
 	}
}

even_or_odd(2);
even_or_odd(0);
even_or_odd(7);
even_or_odd(1);


// Create a method is_uppercase() to see whether the string is ALL CAPS. For example:

// Corner Cases

// For simplicity, you will not be tested on the ability to handle corner cases (e.g. "%*&#()%&^#" or similar strings containing alphabetical characters at all) - an ALL CAPS (uppercase) string will simply be defined as one containing no lowercase letters. Therefore, according to this definition, strings with no alphabetical characters (like the one above) should return True.


function isUpperCase(string) {
	if (string == string.toUpperCase()) {
		console.log('true');
	} else {
		console.log('false');
	}
}

isUpperCase('c');
isUpperCase('C');
isUpperCase('hello I AM DONALD');



// We want an array, but not just any old array, an array with contents!

// Write a function that produces an array with the numbers 0 to N-1 in it.

// For example, the following code will result in an array containing the numbers 0 to 4:

function array(N) {
	var resultsArray = [];
	for (var i = 0; i <= N - 1; i++){
		resultsArray.push(i);
	}
		console.log(resultsArray);
}

array(5);
array(4);


//Mumbling
// This time no story, no theory. The examples below show you how to write function accum:

// Examples:

// accum("abcd");    // "A-Bb-Ccc-Dddd"
// accum("RqaEzty"); // "R-Qq-Aaa-Eeee-Zzzzz-Tttttt-Yyyyyyy"
// accum("cwAt");    // "C-Ww-Aaa-Tttt"
// The parameter of accum is a string which includes only letters from a..z and A..Z.


function accum(s) {
	var stringAsArray = s.split('');
	console.log(stringAsArray);
	stringAsArray.forEach(function (element, index) {
		var upperCase = element.toUpperCase();
		var lowerCase = element.toLowerCase();
		if (index === 0) {
			console.log(upperCase);
		} else {
			console.log(upperCase + lowerCase);
		}
		
	});
}

  

accum("ZpglnRxqenU"); //Z-Pp-Ggg-Llll-Nnnnn etc...
accum("NyffsGeyylB");
accum("MjtkuBovqrU");
accum("EvidjUnokmM");
accum("HbideVbxncC");

