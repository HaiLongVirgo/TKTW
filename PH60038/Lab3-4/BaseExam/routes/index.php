<?php
// Trang điều hướng
$action = $_GET['action'] ?? '/';

match ($action) {
    '/'         => (new HomeController)->index(),
     'Product-list' => (new ProductController)->list(),
     'Product-create'   => (new ProductController)->create(),
     $id = $_GET['id'] ?? null,
    'Product-update'   => (new ProductController)->update($id),
    'Product-detail'   => (new ProductController)->detail($id),
    'Product-delete'   => (new ProductController)->delete($id),
};