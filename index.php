<?php

require 'src/Todo.php';
require 'helpers.php';
require 'src/Router.php';

$router = new Router();
$todo = new Todo();

$router->get('/', function() {
    echo '<a href="/todos">Todos</a>';
});





$router->get('/todos', function() use ($todo) {
    $todos = $todo->getAllTodos();
    view('home', [
        'todos' => $todos
    ]);
});

$router->get('/complete/{id}', function($todoId) use ($todo) {

        $todo->complete($todoId);
        header('Location: /todos');
        exit();

});

$router->get('/in_progress/{id}', function($todoId) use ($todo) {

        $todo->inProgress($todoId);
        header('Location: /todos');
        exit();

});

$router->get('/pending/{id}', function($todoId) use ($todo) {

        $todo->pending($todoId);
        header('Location: /todos');
        exit();

});

