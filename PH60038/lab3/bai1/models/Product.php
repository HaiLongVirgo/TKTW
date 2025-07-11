<?php
function getAllProducts() {
    return [
        ["id" => 1, "name" => "Áo thun", "price" => 100000],
        ["id" => 2, "name" => "Quần jeans", "price" => 200000],
    ];
}

function getProductById($id) {
    $products = getAllProducts();
    foreach ($products as $p) {
        if ($p['id'] == $id) return $p;
    }
    return null;
}
