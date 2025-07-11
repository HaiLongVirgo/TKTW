<h1>Danh sách sản phẩm</h1>
<?php foreach ($products as $p): ?>
    <div>
        <h3><?= $p['name'] ?> - <?= $p['price'] ?> VNĐ</h3>
        <p>Danh mục: <?= $p['category_name'] ?></p>
        <a href="index.php?pg=product_detail&id=<?= $p['id'] ?>">Xem chi tiết</a>
    </div>
<?php endforeach; ?>
