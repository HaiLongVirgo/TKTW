<?php
require_once "Connect.php";
class Category {
    public static function all() {
        $conn = Connect::getConnection();
        $stmt = $conn->prepare("SELECT * FROM categories");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
