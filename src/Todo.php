<?php
require "DB.php";

class Todo {
    public $pdo;
    public function __construct () {
        $db = new DB();
        $this->pdo = $db->conn;
    }
    public function store ( $title,  $dueDate) {
        $query = "INSERT INTO todos(title, status, due_date, created_at, updated_at) VALUES (:title, 'pending', :due_date, NOW(), NOW())";
        $this->pdo->prepare($query)->execute([
            ":title" => $title,
            ":due_date" => $dueDate
        ]);
    }
    public function get () {
        $query = "SELECT * FROM todos";
        $stmt = $this->pdo->query($query);
        return $stmt->fetchAll();
    }
    public function complate (int $id): bool {
        $query = "UPDATE todos set status='complated' where id=:id";
        return $this->pdo->prepare($query)->execute([
            ":id" => $id
        ]);
    }
}