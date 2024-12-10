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

        body {
            background-color: #f8f9fa;
        }
        .edit-container {
            max-width: 600px;
            margin: 50px auto;
            padding: 20px;
            background-color: #ffffff;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        .edit-header {
            text-align: center;
            margin-bottom: 20px;
        }
        .form-group {
            margin-bottom: 15px;
        }
        .btn-actions {
            display: flex;
            justify-content: space-between;
        }
    </style>
</head>
<body>
