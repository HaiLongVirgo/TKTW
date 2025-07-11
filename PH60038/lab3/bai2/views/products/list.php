<h1>Danh sách sản phẩm</h1>
<table border="1">
    <tr><th>Tên</th><th>Giá</th><th>Danh mục</th></tr>
    <?php foreach ($products as $p): ?>
    <tr>
        <td><?= $p['name'] ?></td>
        <td><?= number_format($p['price']) ?>đ</td>
        <td><?= $p['category_name'] ?></td>
    </tr>
    <?php endforeach; ?>
</table>
