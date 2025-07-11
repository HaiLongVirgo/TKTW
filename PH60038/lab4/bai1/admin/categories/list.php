<h2>Danh sách danh mục</h2>
<a href="index.php?pg=create_category">Thêm mới</a>
<table border="1">
<tr><th>ID</th><th>Tên danh mục</th><th>Hành động</th></tr>
<?php foreach ($categories as $c): ?>
    <tr>
        <td><?= $c['id'] ?></td>
        <td><?= $c['name'] ?></td>
        <td>
            <a href="index.php?pg=edit_category&id=<?= $c['id'] ?>">Sửa</a> |
            <a href="index.php?pg=delete_category&id=<?= $c['id'] ?>" onclick="return confirm('Xóa?')">Xóa</a>
        </td>
    </tr>
<?php endforeach; ?>
</table>
