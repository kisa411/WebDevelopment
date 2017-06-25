var Todos = require('../models/todoModel');

module.exports = function(app) {
    app.get('/api/setupTodos', function(req,res) {
        //seed database
        var starterTodos = [
            {
                username: 'kisa411',
                todo: 'Plan Quebec Trip', 
                isDone: false
            },
            {
                username: 'kisa411',
                todo: 'Clean Spuddy\'s room', 
                isDone: false
            }
        ];
        Todos.create(starterTodos, function(err, results) {
            res.send(results);
        });
    });
}