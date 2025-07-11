<?php
require_once "models/Product.php";
class ProductController {
    public function list() {
        $products = Product::all();
        include "views/products/list.php";
    }
}
