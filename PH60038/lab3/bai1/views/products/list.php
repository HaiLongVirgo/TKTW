<h1>Danh sách sản phẩm</h1>
<ul>
<?php foreach ($products as $p): ?>
    <li>
        <a href="index.php?pg=product-detail&id=<?= $p['id'] ?>">
            <?= $p['name'] ?> - <?= number_format($p['price']) ?>đ
        </a>
    </li>
<?php endforeach; ?>
</ul>
