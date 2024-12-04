<!doctype html>
<html lang="uz">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Todo App</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        body {
            background-color: #f4f6f9;
            font-family: Arial, sans-serif;
        }

        .todo-body {
            max-width: 700px;
            margin: 0 auto;
            padding: 30px;
            background-color: #ffffff;
            border-radius: 8px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }

        .todo-text {
            font-weight: bold;
            font-size: 2.5rem;
            color: #333;
            text-align: center;
        }

        .todo-form input, .todo-form button {
            border-radius: 8px;
        }

        .todo-form input[type="text"], .todo-form input[type="datetime-local"] {
            margin-right: 10px;
        }

        .list-group-item {
            font-size: 1.1rem;
            border: none;
            background-color: #f8f9fa;
            padding: 15px;
            margin-bottom: 10px;
            border-radius: 8px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        .completed {
            text-decoration: line-through;
            color: #888;
        }

        .in_progress {
            text-decoration: underline;
            color: orange!important;
        }

        .btn-custom {
            border-radius: 8px;
            padding: 8px 15px;
            font-size: 1rem;
        }

        .btn-in-progress {
            background-color: #f0ad4e;
            color: white;
        }

        .btn-complete {
            background-color: #28a745;
            color: white;
        }

        .btn-in-progress:hover, .btn-complete:hover {
            background-color: #d39e00;
            color: white;
        }

        @media (max-width: 768px) {
            .todo-body {
                padding: 20px;
            }

            .todo-text {
                font-size: 2rem;
            }
        }
    </style>
</head>
<body>

<div class="container">
    <div class="row d-flex justify-content-center">
        <div class="todo-body my-5 p-3">
            <h1 class="text-center todo-text">Todo App</h1>
            <p class="text-center">Kunlik Vazifangizni Kiriting☺️</p>
            <form method="POST" action="/store">
                <div class="input-group mb-3 todo-form">
                    <input type="text" class="form-control" placeholder="Vazifangizni kiriting" aria-label="Vazifa" name="title" required>
                    <input type="datetime-local" class="form-control" name="due_date" required>
                    <button class="btn btn-primary btn-custom" type="submit" id="button-addon2">Qo'shish</button>
                </div>
            </form>
            <ul class="list-group">
                <?php /** @var TYPE_NAME $todos */
                foreach ($todos as $todo){
                    echo '<li class="list-group-item d-flex justify-content-between align-items-center ' . $todo['status'] . '">
                        ' . $todo['title'] . '

                        <div>
                                <a href="/todos/' . $todo['id'] .'/edit" class="btn btn-in-progress btn-custom">edit</a>
                                <a href="/todos/' . $todo['id'] . '/delete" class="btn btn-complete btn-custom">Delete</a>
                        </div>
                    </li>';
                }


                ?>
            </ul>
        </div>
    </div>
</div>



<!---->
<?php //if ($todo['status'] == 'pending'): ?>
<!--    <a href="/in_progress/--><?php //= $todo['id']?><!-- " class="btn btn-in-progress btn-custom">In progress</a>-->
<!--    <a href="/complete/--><?php //= $todo['id']?><!-- " class="btn btn-complete btn-custom">Complete✅</a>-->
<?php //elseif ($todo['status'] == 'in_progress'): ?>
<!--    <a href="/complete/--><?php //= $todo['id']?><!-- " class="btn btn-complete btn-custom">Complete✅</a>-->
<!--    <a href="/pending/--><?php //= $todo['id']?><!-- " class="btn btn-complete btn-custom">Pending❌</a>-->
<?php //elseif ($todo['status'] == 'completed'): ?>
<!--    <a href="/in_progress/--><?php //= $todo['id']?><!-- " class="btn btn-in-progress btn-custom">In progress</a>-->
<!--    <a href="/pending/--><?php //= $todo['id']?><!-- " class="btn btn-complete btn-custom">Pending❌</a>-->
<?php //endif; ?>
<!---->
<!---->



</body>
</html>
