var express = require('express');
var app = express();
var mongoose = require('mongoose');
var config = require('./config');
var setupController = require('./controllers/setupController');
var apiController = require('./controllers/apiController');
var path = require('path');

var port = process.env.PORT || 3000;

// app.use('/', express.static(__dirname + '/public'));

app.use('/', express.static(__dirname));

app.get('/', function(req, res) {
    res.sendFile(path.join(__dirname + '/Public/index.html'));
});

app.set('view engine', 'ejs');

// will get the username and password from config.json
mongoose.connect(config.getDbConnectionString());
setupController(app);
apiController(app);

app.listen(port);

