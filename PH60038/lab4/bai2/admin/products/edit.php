<h2>Sửa sản phẩm</h2>
<form method="POST">
    <input name="name" value="<?= $product['name'] ?>" required><br>
    <input name="price" value="<?= $product['price'] ?>" required><br>
    <textarea name="description"><?= $product['description'] ?></textarea><br>
    <select name="category_id">
        <?php foreach ($categories as $c): ?>
            <option value="<?= $c['id'] ?>" <?= $product['category_id'] == $c['id'] ? 'selected' : '' ?>>
                <?= $c['name'] ?>
            </option>
        <?php endforeach; ?>
    </select><br>
    <button>Cập nhật</button>
</form>