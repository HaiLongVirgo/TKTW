<?php
require_once 'models/Category.php';

class CategoryController {
    private $model;

    public function __construct() {
        $this->model = new Category();
    }

    public function index() {
        $categories = $this->model->getAll();
        include 'admin/categories/list.php';
    }

    public function create() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $this->model->create($_POST['name']);
            header('Location: index.php?pg=categories');
        }
        include 'admin/categories/add.php';
    }

    public function edit($id) {
        $category = $this->model->getById($id);
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $this->model->update($id, $_POST['name']);
            header('Location: index.php?pg=categories');
        }
        include 'admin/categories/edit.php';
    }

    public function delete($id) {
        $this->model->delete($id);
        header('Location: index.php?pg=categories');
    }
}
?>
