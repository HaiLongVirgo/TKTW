<h1>Danh sách danh mục</h1>
<ul>
    <?php foreach ($categories as $c): ?>
        <li><?= $c['name'] ?></li>
    <?php endforeach; ?>
</ul>
