<?php
require_once "Connect.php";
class Product {
    public static function all() {
        $conn = Connect::getConnection();
        $stmt = $conn->prepare("SELECT p.*, c.name AS category_name 
                                FROM products p 
                                JOIN categories c ON p.category_id = c.id");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
