<?php

require 'bootstrap.php';

use App\Todo;
use App\Router;

require 'helpers.php';
$router = new Router();
$todo = new Todo();


$router->get('/todos/{id}/edit', fn ($todoId) => require 'controllers/editTodoController.php');

$router->put('/todos/{id}/update', fn ($todoId)=> require  'controllers/updateTodoController.php');

$router->get('/todos', fn()=> require 'controllers/getTodoController.php');

$router->get('/', fn ()=> require 'controllers/homeController.php');

$router->get('/todos/{id}/delete',fn ($todoId)=> require 'controllers/deleteTodoController.php');




$router->post('/store', fn()=> require 'controllers/storeTodoController.php');



