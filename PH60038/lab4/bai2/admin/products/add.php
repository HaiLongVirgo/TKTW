<h2>Thêm sản phẩm</h2>
<form method="POST">
    <input name="name" placeholder="Tên sản phẩm" required><br>
    <input name="price" placeholder="Giá" required><br>
    <textarea name="description" placeholder="Mô tả"></textarea><br>
    <select name="category_id">
        <?php foreach ($categories as $c): ?>
            <option value="<?= $c['id'] ?>"><?= $c['name'] ?></option>
        <?php endforeach; ?>
    </select><br>
    <button>Thêm</button>
</form>
