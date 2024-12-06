<?php
require 'views/componets/header.php';
?>

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


<?php
require 'views/componets/footer.php';
?>

