<?php

require 'src/Todo.php';
require 'helpers.php';
require 'src/Router.php';

$router = new Router();
$todo = new Todo();

//$router->get('/', function() {
//    echo '<a href="/todos">Todos</a>';
//});



$router->get('/todos/{id}/edit', function ($todoId) use($todo){
    echo 'Edit the task: ' . $todoId;
    $getTodo = $todo->getTodo($todoId);
    view('edit', [
        'todo'=>$getTodo
    ]);
});


$router->get('/edit', function (){
    view('edit');
});

$router->get('/', function (){
    view('main');
});


$router->get('/todos', function() use ($todo) {
    $todos = $todo->getAllTodos();
    view('home', [
        'todos' => $todos
    ]);
});

$router->get('/complete/{id}', function($todoId) use ($todo) {

        $todo->complete($todoId);
        redirect('Location: /todos');
        exit();

});

$router->get('/in_progress/{id}', function($todoId) use ($todo) {

        $todo->inProgress($todoId);
        redirect('Location: /todos');
        exit();

});

$router->get('/pending/{id}', function($todoId) use ($todo) {

        $todo->pending($todoId);
        redirect('Location: /todos');
        exit();

});

$router->post('/store', function() use ($todo) {
    $todo->store($_POST['title'],$_POST['due_date']);
    redirect('Location: /todos');
});

$router->get('/todos/{id}/delete',function ($todoId) use ($todo){
    $todo->destroy($todoId);
    redirect('/todos');

});
