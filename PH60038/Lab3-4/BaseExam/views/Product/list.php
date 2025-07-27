<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table{
            margin: 100px;
           font-size: 25px;
        }
        table tr td a{
            padding: 20px 20px;
        }
    </style>
</head>
<body>
    <h2>Trang Danh Sách Sản Phẩm</h2>
        <table border="1">
            <thead>
             <th>ID</th>
             <th>Tên Sản Phẩm</th>
             <th>Giá</th>
             <th>Ảnh</th>
             <th>Ghi Chú</th>
             <th>Hãng</th>
             <th>Hàng Động</th> 
           </thead>
           <tbody>
            <?php foreach($danhsach as $a) : ?> 
            <tr>
                 <td><?= $a->id ?></td>
                 <td><?= $a->name ?></td>
                 <td><?= $a->price ?></td>
                 <td> <?php if(!empty($a->image)) : ?>
                <img src="<?= BASE_ASSETS_UPLOADS . $a->image ?>" alt="" width="100">
                <?php endif; ?></td>
                 <td><?= $a->description ?></td>
                 <td><?= $a->category_name ?></td>
                <td>
    <a href="?action=Product-create&id=<?= $a->id ?>">Thêm</a> |
    <a href="?action=Product-update&id=<?= $a->id ?>">Sửa</a> |
    <a href="?action=Product-delete&id=<?= $a->id ?>" onclick="return confirm('Bạn có chắc chắn muốn xóa?');">Xóa</a>
</td>

                <?php endforeach; ?>
                
            </tr>
           </tbody>
        </table>
        <a href="?action=main.php">Quay Lại</a>
</body>
</html>