//First way:
		
//the var today is initialized with a Date object

//containing the current date and time

//on the basis of the user's computer

//use toLocaleDateString() to adjust the date

//to the local time zone and format it automatically

var today = new Date().toLocaleDateString();



//Second way:

//you pass a millisecond argument that starts at 1970/01/01:

//new Date(milliseconds)

var date = new Date(1000).toLocaleDateString();




//Third way:

//You pass a string as argument:

//new Date(dateString)

var date = new Date("10 November, 2011").toLocaleDateString();



Fourth way:

//new Date(year, month, day, hours, minutes, seconds, milliseconds)

//only year and month are required, 

//the others are optional arguments and 

//where not present 0 is passed by default

//Below you pass the year in a 4-digit format, and the month in number form:

//months are represented by numbers from 0 (January) to 11 (December)

var date = new Date(2011, 10).toLocaleDateString();

// use getDate() to retrieve a date
var myDate = new Date();
document.write(myDate.getDate());

// use getTime() to retrieve a time
var myTime = new Date();
document.write(myTime.getTime());
