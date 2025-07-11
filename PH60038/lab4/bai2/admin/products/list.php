<h2>Danh sách sản phẩm</h2>

<!-- Form tìm kiếm -->
<form method="GET">
    <input type="hidden" name="pg" value="product">
    <input type="text" name="keyword" placeholder="Tìm sản phẩm..." value="<?= isset($_GET['keyword']) ? $_GET['keyword'] : '' ?>">
    <button type="submit">Tìm kiếm</button>
</form>

<!-- Nút thêm sản phẩm -->
<p><a href="index.php?pg=add-product">+ Thêm sản phẩm</a></p>

<table border="1" cellpadding="10" cellspacing="0">
    <tr>
        <th>ID</th>
        <th>Tên sản phẩm</th>
        <th>Giá</th>
        <th>Danh mục</th>
        <th>Thao tác</th>
    </tr>

    <?php foreach ($products as $item): ?>
    <tr>
        <td><?= $item['id'] ?></td>
        <td><?= $item['name'] ?></td>
        <td><?= number_format($item['price']) ?> đ</td>
        <td><?= $item['category_name'] ?></td>
        <td>
            <a href="index.php?pg=edit-product&id=<?= $item['id'] ?>">Sửa</a> |
            <a href="index.php?pg=delete-product&id=<?= $item['id'] ?>" onclick="return confirm('Bạn có chắc muốn xóa không?');">Xóa</a>
        </td>
    </tr>
    <?php endforeach; ?>
</table>
