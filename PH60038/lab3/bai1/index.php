<?php
include_once "views/layouts/header.php";

if (isset($_GET['pg'])) {
    $pg = $_GET['pg'];
    switch ($pg) {
        case 'products':
            include_once "controller/ProductController.php";
            $ctrl = new ProductController();
            $ctrl->set_view("list");
            $ctrl->view();
            break;

        case 'product-detail':
            include_once "controller/ProductController.php";
            $ctrl = new ProductController();
            $ctrl->set_view("detail");
            $ctrl->view();
            break;

        case 'register':
            include_once "controller/PageController.php";
            $ctrl = new PageController();
            $ctrl->set_view("auth/register");
            $ctrl->view();
            break;

        case 'login':
            include_once "controller/PageController.php";
            $ctrl = new PageController();
            $ctrl->set_view("auth/login");
            $ctrl->view();
            break;

        case 'about':
            include_once "controller/PageController.php";
            $ctrl = new PageController();
            $ctrl->set_view("about");
            $ctrl->view();
            break;

        case 'contact':
            include_once "controller/PageController.php";
            $ctrl = new PageController();
            $ctrl->set_view("contact");
            $ctrl->view();
            break;

        default:
            include_once "controller/HomeController.php";
            $ctrl = new HomeController();
            $ctrl->set_view("home");
            $ctrl->view();
            break;
    }
} else {
    include_once "controller/HomeController.php";
    $ctrl = new HomeController();
    $ctrl->set_view("home");
    $ctrl->view();
}

include_once "views/layouts/footer.php";
