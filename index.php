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

$router->get('/complete', function() use ($todo) {
    if (!empty($_GET['id'])) {
        $todo->complete($_GET['id']);  
        header('Location: /todos');
        exit();
    }
});

$router->get('/in_progress', function() use ($todo) {
    if (!empty($_GET['id'])) {
        $todo->inProgress($_GET['id']);  
        header('Location: /todos');
        exit();
    }
});

$router->get('/pending', function() use ($todo) {
    if (!empty($_GET['id'])) {
        $todo->pending($_GET['id']);  
        header('Location: /todos');
        exit();
    }
});



//
//
//$todo = new Todo();
//
//if ($uri == '/') {
//    $todos = $todo->get();
//    view('home', [
//        'todos'=>$todos
//    ]);
//} elseif ($uri == '/store') {
//    if (!empty($_POST['title']) && !empty($_POST['due_date'])) {
//        $todo->store($_POST['title'], $_POST['due_date']);
//        header('Location: /');
//        exit();
//    }
//}elseif ($uri == '/complete') {
//    if (!empty($_GET['id'])) {
//        $todo->complete($_GET['id']);
//        header('Location: /');
//        exit();
//    }
//}
//elseif ($uri == '/pending') {
//    if (!empty($_GET['id'])) {
//        $todo->pending($_GET['id']);
//        header('Location: /');
//        exit();
//    }
//}
//elseif ($uri == '/in_progress') {
//    if (!empty($_GET['id'])) {
//        $todo->inProgress($_GET['id']);
//        header('Location: /');
//        exit();
//    }
//}
//else{
//    echo $uri . " Bu sahifa topilmadi!";
//}