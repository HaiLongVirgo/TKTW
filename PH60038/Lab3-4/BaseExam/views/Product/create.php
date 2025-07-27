<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Trang Tạo Mới</h3>
    <form action="" method="post" enctype="multipart/form-data">
        <div>
            <span>Nhập Tên Mô Hình:</span>
            <input type="text" name="name">
        </div>
        <div>
            <span>Nhập Giá:</span>
            <input type="text" name="price">
        </div>
        <div>
            <span>ghi chú</span>
            <input type="text" name="description">
        </div>
        <div>
            <span>Chọn Hãng:</span>
            <select name="category_name" id="">
                <?php
                foreach($danhsach as $a):?>
                <option value="<?= $a->id?>"><?= $a->name?></option>
                <?php endforeach;?>
            </select>
        </div>
        <div>
            <span>Chọn Ảnh:</span>
            <input type="text" name="name">
            <input type="file" name="file_upload">
        </div>
        <a href="?action=Product-list">Quay Lại</a>
        <button type="submit" name="nut">Tạo Mới</button>
    </form> 
</body>
</html>