<?php 
class ProductController {
    public function index() {
        $productModel = new Product();
        $products = $productModel->all();
        $view = 'products/list';
        $title = 'Tất cả mô hình';
        require PATH_VIEW_MAIN;
    }

    public function show() {
        $id = $_GET['id'] ?? 0;
        $productModel = new Product();
        $product = $productModel->find($id);
        $view = 'products/detail';
        $title = $product['name'];
        require PATH_VIEW_MAIN;
    }
}
?>