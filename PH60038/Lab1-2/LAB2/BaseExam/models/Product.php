<?php 
class Product extends BaseModel {
    public function all() {
        return $this->pdo->query("SELECT * FROM Product")->fetchAll();
    }

    public function find($id) {
        $stmt = $this->pdo->prepare("SELECT * FROM Product WHERE id = ?");
        $stmt->execute([$id]);
        return $stmt->fetch();
    }
}

?>
