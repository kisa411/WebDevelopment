var express = require("express");
var app = express();

// DEFINE ROUTES
// "/" => "Hi there!"
// get(url, callBackfunction(request, response))
app.get("/", function(req, res) {
	res.send("Hi there!");
});
// "/bye" => "Goodbye!"
app.get("/bye", function(req, res) {
	res.send("Goodbye!");
});
// "/dog" => "Meow."
app.get("/dog", function(req, res) {
	res.send("Meow.");
});
// pattern needs to match "/:variable" to access this route
app.get("/:variable", function(req, res) {
	var variableSent = req.params.variable;
	res.send("Request variable was " + variableSent);
});
// catchall route "*"
app.get("*", function(req, res) {
	res.send("Default");
});


// Tell Express to listen for requests (start server)
// Will be accessible on http://localhost:3000/
// For cloud 9 it's app.listen(process.env.PORT, process.env.IP);
app.listen(3000, function() {
	console.log("Server start");
})