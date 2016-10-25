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



