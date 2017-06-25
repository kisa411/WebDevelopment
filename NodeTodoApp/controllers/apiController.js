var Todos = require('../models/todoModel');
var bodyParser = require('body-parser');

module.exports = function(app) {
    app.use(bodyParser.json());
    app.use(bodyParser.urlencoded({ extended:true }));

    // look for the document with this username in the todo list
    app.get('/api/todos/:uname', function(req, res) {
        
        Todos.find({ username: req.params.uname },
        
        function(err, todos) {
            //if there's an error then throw the error
            if (err) throw err;

            //otherwise return the todo entry as the html response
            res.send(todos);
        });
    });

    // look for the document with this todo ID in the todo list
    app.get('/api/todo/:id', function(req, res) {
        
        Todos.findById({ _id: req.params.id }, 

        function(err, todo) {
            if (err) throw err;

            res.send(todo);
        });
    });

    // add a todo item
    app.post('/api/todo', function(req, res) {

        // if the todo already has an id then it's an update
        if (req.body.id) {
            Todos.findByIdAndUpdate(req.body.id, 
                {
                    todo: req.body.todo, 
                    isDone: req.body.isDone, 
                    hasAttachment: req.body.hasAttachment
                }, 
                function(err, todo) {
                    if (err) throw err;

                    res.send('Success - updated existing todo');
                }
            );
        // otherwise then it's a new todo that should be entered into db
        } else {
            var newTodo = Todos(
                {
                    username: 'kisa411', 
                    todo: req.body.todo,
                    isDone: req.body.isDone, 
                    hasAttachment: req.body.hasAttachment
                }
            );
            newTodo.save(function(err) {
                if (err) throw err;

                res.send('Sucess - added new todo');
            });
        }
    });

    // delete existing todo
    app.delete('/api/todo', function(req, res) {

        Todos.findByIdAndRemove(req.body.id, function(err) {
            if (err) throw err;

            res.send('Success - deleted entry');
        });
    });
}