<?php
$page = $_GET['pg'] ?? 'home';

switch ($page) {
    case 'home':
        require 'controller/HomeController.php';
        (new HomeController())->index();
        break;
    case 'products':
        require 'controller/ProductController.php';
        (new ProductController())->index();
        break;
    case 'product_detail':
        require 'controller/ProductController.php';
        (new ProductController())->detail($_GET['id']);
        break;
    case 'about':
    case 'contact':
    case 'login':
    case 'register':
        require 'controller/PageController.php';
        $ctrl = new PageController();
        $ctrl->{$page}();
        break;

    // Admin
    case 'categories':
        require 'controller/CategoryController.php';
        (new CategoryController())->index();
        break;
    case 'create_category':
        require 'controller/CategoryController.php';
        (new CategoryController())->create();
        break;
    case 'edit_category':
        require 'controller/CategoryController.php';
        (new CategoryController())->edit($_GET['id']);
        break;
    case 'delete_category':
        require 'controller/CategoryController.php';
        (new CategoryController())->delete($_GET['id']);
        break;
    default:
        echo "<h1>404 - Không tìm thấy trang</h1>";
}
?>
