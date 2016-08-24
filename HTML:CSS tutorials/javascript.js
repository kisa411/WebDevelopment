// to declare a variable you write 'var variableName'

var amountDue=0;
var productPrice=5;
var quantity=2;

amountDue = productPrice*quantity;
alert('The amount due is:' + amountDue);

// to declare a constant you write 'const constantName'

const taxRate = 10;

// simple operators and comparisons
var result=0;
var firstNum=20;
var secondNum=5;

result = firstNum + secondNum;

document.write(result + '\n'); //write result on the page

// grab the html div by its id attribute and store it in a var named container
var container = document.getElementById("wrapper");

// use Math.random to generate a random number
var randomNumber = Math.random();

// use Math.floor() to round off the random number and turn it into an integer value between 0 and 10
var numImages = Math.floor(randomNumber*11);

alert(numImages);

for ( var i=1; i<=numImages; i++ ) {
	var newImage = '<img src="rain.jpg" alt="#" />' + i;
	container.innerHTML += newImage;
} 

// declaring a function in Javascript
function showDate() {
	var today = new Date(); // this is how Javascript retrieves today's date

	var myCalendar = document.getElementById("calendar"); //get hold of the calendar span element where today's date will be inserted

	var myButton = document.getElementById("myButton"); // get hold of the button: need this when it comes to change the value attribute

	// insert the date in the span element using toDateString(), which changes the date just retrieved into a user-friendly format for display
	myCalendar.innerHTML = today.toDateString();

	// change the value attribute of the button to say something more approrpriate once the date is displayed
	myButton.value = "Finished!"; 
}










