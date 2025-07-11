<?php
$page = $_GET['page'] ?? 'product';

switch ($page) {
    case 'product':
        include "controller/ProductController.php";
        $ctrl = new ProductController();
        $ctrl->list();
        break;
    case 'category':
        include "controller/CategoryController.php";
        $ctrl = new CategoryController();
        $ctrl->list();
        break;
    default:
        echo "404 - Không tìm thấy trang";
}
