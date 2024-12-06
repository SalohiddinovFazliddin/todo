<?php
require 'views/componets/header.php';

?>
<div class="edit-container">
    <h2 class="edit-header">Edit Task</h2>
    <form method="POST" action="/todos/<?= $todo['id'] ?>/update">
        <input hidden="" type="text" name="_method" value="PUT" id="">
        <div class="form-group">
            <label for="taskName" class="form-label">Task Name</label>
            <input type="text" name="title" id="taskName" class="form-control" placeholder="Enter task name" value="<?= isset($todo['title']) ? htmlspecialchars($todo['title']) : '' ?>">
        </div>
        <div class="form-group">
            <label for="taskStatus" class="form-label">Status</label>
            <select id="taskStatus" name="status"  class="form-select">
                <option value="Completed" <?= isset($todo['status']) && $todo['status'] == 'completed' ? 'selected' : '' ?>>Completed</option>
                <option value="Pending" <?= isset($todo['status']) && $todo['status'] == 'pending' ? 'selected' : '' ?>>Pending</option>
                <option value="in_progress" <?= isset($todo['status']) && $todo['status'] == 'in_progress' ? 'selected' : '' ?>>In-progress</option>
            </select>
        </div>
        <div class="form-group">
            <label for="taskDueDate" class="form-label">Due Date</label>
            <input type="datetime-local" id="taskDueDate" name="due_date" class="form-control" value="<?= isset($todo['due_date']) ? htmlspecialchars($todo['due_date']) : '' ?>">
        </div>
        <div class="btn-actions">
            <button type="submit" class="btn btn-primary">Save Changes</button>
            <a href="/todos" class="btn btn-secondary">Back to Todo list</a>
        </div>
    </form>
</div>

<?php
require 'views/componets/footer.php';
?>
