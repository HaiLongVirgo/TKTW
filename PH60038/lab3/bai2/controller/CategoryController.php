<?php
require_once "models/Category.php";
class CategoryController {
    public function list() {
        $categories = Category::all();
        include "views/categories/list.php";
    }
}
