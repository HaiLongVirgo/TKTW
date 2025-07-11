<?php
require_once 'models/Product.php';

class ProductController {
    public function index() {
        $model = new Product();
        $products = $model->getAll();
        include 'views/products/list.php';
    }

    public function detail($id) {
        $model = new Product();
        $product = $model->getById($id);
        include 'views/products/detail.php';
    }
}
?>
