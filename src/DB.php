<?php

class DB {
    public $host = "localhost";
    public $user = "root";
    public $pass = "5555";
    public $db = "todoApp";
    public $conn;
    public function __construct() {
        $this->conn = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->db, $this->user, $this->pass);
    }
}