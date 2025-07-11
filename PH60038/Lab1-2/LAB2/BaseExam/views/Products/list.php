<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php foreach ($products as $p): ?>
<div class="col-md-3 mb-3">
    <div class="card">
        <img src="<?= BASE_ASSETS_UPLOADS . $p['image'] ?>" class="card-img-top">
        <div class="card-body">
            <h5><?= $p['name'] ?></h5>
            <p><?= number_format($p['price']) ?>đ</p>
            <a href="?action=show&id=<?= $p['id'] ?>" class="btn btn-sm btn-primary">Chi tiết</a>
        </div>
    </div>
</div>
<?php endforeach; ?>

</body>
</html>