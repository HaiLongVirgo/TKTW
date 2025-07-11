<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="col-md-6 offset-md-3">
    <img src="<?= BASE_ASSETS_UPLOADS . $product['image'] ?>" class="img-fluid" />
    <h2><?= $product['name'] ?></h2>
    <p><?= $product['description'] ?></p>
    <p class="text-danger fw-bold"><?= number_format($product['price']) ?>đ</p>
</div>

</body>
</html>