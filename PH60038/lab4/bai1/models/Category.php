<?php
require_once 'models/Connect.php';

class Category {
    private $conn;

    public function __construct() {
        $this->conn = (new Connect())->getConnection();
    }

    public function getAll() {
        $stmt = $this->conn->prepare("SELECT * FROM categories");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getById($id) {
        $stmt = $this->conn->prepare("SELECT * FROM categories WHERE id = ?");
        $stmt->execute([$id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function create($name) {
        $stmt = $this->conn->prepare("INSERT INTO categories(name) VALUES(?)");
        return $stmt->execute([$name]);
    }

    public function update($id, $name) {
        $stmt = $this->conn->prepare("UPDATE categories SET name = ? WHERE id = ?");
        return $stmt->execute([$name, $id]);
    }

    public function delete($id) {
        $stmt = $this->conn->prepare("DELETE FROM categories WHERE id = ?");
        return $stmt->execute([$id]);
    }
}
?>
