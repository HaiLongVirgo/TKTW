<?php
require_once 'models/Connect.php';

class Product {
    private $conn;

    public function __construct() {
        $this->conn = (new Connect())->getConnection();
    }

    public function getAll() {
        $stmt = $this->conn->prepare("SELECT p.*, c.name AS category_name 
                                      FROM products p 
                                      JOIN categories c ON p.category_id = c.id");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getById($id) {
        $stmt = $this->conn->prepare("SELECT * FROM products WHERE id = ?");
        $stmt->execute([$id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
}
?>
