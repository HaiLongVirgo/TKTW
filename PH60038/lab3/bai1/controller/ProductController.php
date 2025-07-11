<?php
include_once "models/Product.php";
class ProductController {
    private $view;
    public function set_view($v) {
        $this->view = $v;
    }
    public function view() {
        if ($this->view === "list") {
            $products = getAllProducts();
        } elseif ($this->view === "detail") {
            $id = $_GET['id'] ?? 1;
            $product = getProductById($id);
        }
        include "views/products/{$this->view}.php";
    }
}
