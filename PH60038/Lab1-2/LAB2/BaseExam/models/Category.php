<?php 
class Category extends BaseModel {
    public function all() {
        return $this->pdo->query("SELECT * FROM Category")->fetchAll();
    }
}

?>