<?php
require_once 'models/Product.php';

class ProductController
{
    public function index()
    {
        $model = new Product();
        $products = $model->getAll();
        include 'views/products/list.php';
    }

    public function detail($id)
    {
        $model = new Product();
        $product = $model->getById($id);
        include 'views/products/detail.php';
    }
    public function adminIndex()
    {
        $model = new Product();
        if (isset($_GET['kw'])) {
            $products = $model->search($_GET['kw']);
        } else {
            $products = $model->getAll();
        }
        include 'admin/products/list.php';
    }

    public function create()
    {
        require_once 'models/Category.php';
        $catModel = new Category();
        $categories = $catModel->getAll();

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $model = new Product();
            $model->create($_POST);
            header('Location: index.php?pg=products_admin');
        }
        include 'admin/products/add.php';
    }

    public function edit($id)
    {
        require_once 'models/Category.php';
        $catModel = new Category();
        $categories = $catModel->getAll();

        $model = new Product();
        $product = $model->getById($id);
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $model->update($id, $_POST);
            header('Location: index.php?pg=products_admin');
        }
        include 'admin/products/edit.php';
    }

    public function delete($id)
    {
        $model = new Product();
        $model->delete($id);
        header('Location: index.php?pg=products_admin');
    }
}
