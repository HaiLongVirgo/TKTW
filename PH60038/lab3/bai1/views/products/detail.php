<h1>Chi tiết sản phẩm</h1>
<?php if ($product): ?>
    <p><strong>Tên:</strong> <?= $product['name'] ?></p>
    <p><strong>Giá:</strong> <?= number_format($product['price']) ?>đ</p>
<?php else: ?>
    <p>Sản phẩm không tồn tại.</p>
<?php endif; ?>
