function init() {
	var myButton = document.getElementById("btnAnswer");

	myButton.onclick = getAnswer;
}

// Assign the init() function to the onload event: this event fires when the HTML page is loaded in the browser
onload=init;

// now write the getAnswer() function
function getAnswer() {
	var secretName = "harry potter";

	// store the user input
	var myTextBox = document.getElementById("txtName");
	var name = myTextBox.value;
	var nameLower = name.toLowerCase(); 

	var message = document.getElementById("message");

	if( nameLower.length <=0 ) {
		alert("The answer must be at least one character long.");
	} else if( nameLower.indexOf("harry") ==0 && nameLower.indexOf("potter") == -1 ) {
		alert("Almost there, did you include the last name?");
	} else if( nameLower.match(secretName) ) {
		alert("That's correct!");
		message.innerHTML = "Congratulations, you got it right!";
	} else {
		alert("Wrong!");
		message.innerHTML = "Sorry, the correct answer is: ";
		message.innerHTML+= name.replace(name, "Harry Potter");
	}
}