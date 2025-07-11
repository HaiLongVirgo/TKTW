<?php
require_once 'models/Connect.php';

class Product
{
    private $conn;

    public function __construct()
    {
        $this->conn = (new Connect())->getConnection();
    }

    public function getAll()
    {
        $stmt = $this->conn->prepare("SELECT p.*, c.name AS category_name 
                                      FROM products p 
                                      JOIN categories c ON p.category_id = c.id");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getById($id)
    {
        $stmt = $this->conn->prepare("SELECT * FROM products WHERE id = ?");
        $stmt->execute([$id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
    public function create($data)
    {
        $sql = "INSERT INTO products (name, price, description, category_id) VALUES (?, ?, ?, ?)";
        $stmt = $this->conn->prepare($sql);
        return $stmt->execute([$data['name'], $data['price'], $data['description'], $data['category_id']]);
    }

    public function update($id, $data)
    {
        $sql = "UPDATE products SET name = ?, price = ?, description = ?, category_id = ? WHERE id = ?";
        $stmt = $this->conn->prepare($sql);
        return $stmt->execute([$data['name'], $data['price'], $data['description'], $data['category_id'], $id]);
    }

    public function delete($id)
    {
        $stmt = $this->conn->prepare("DELETE FROM products WHERE id = ?");
        return $stmt->execute([$id]);
    }

    public function search($keyword)
    {
        $stmt = $this->conn->prepare("SELECT p.*, c.name as category_name FROM products p JOIN categories c ON p.category_id = c.id WHERE p.name LIKE ?");
        $stmt->execute(["%$keyword%"]);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
