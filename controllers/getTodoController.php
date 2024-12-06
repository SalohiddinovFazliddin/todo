<?php

$todos = (new \App\Todo())->getAllTodos();
view('home', [
    'todos' => $todos
]);