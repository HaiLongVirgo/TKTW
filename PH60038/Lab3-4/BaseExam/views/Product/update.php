<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Trang Cập Nhật</h3>
    <form action="" method="post" enctype="multipart/form-data">
        <div>
            <span>Nhập Tên Sản Phẩm:</span>
            <input type="text" name="name" value="<?=$product1->name?>">
        </div>
        <div>
            <span>Nhập Giá Tiền:</span>
            <input type="text" name="price" value="<?=$product1->price?>">
        </div>
        <div>
            <span>Ghi Chú:</span>
            <input type="number" name="description" value="<?=$product1->description?>">
        </div>
        <div>
            <span>Chọn Hãng:</span>
            <select name="category_id" id="">
                <?php
                foreach($danhsach as $a):?>
                <?php if($product1->category_id == $a->id){
                    ?>
                <option value="<?= $a->id?>" selected><?= $a->name?></option>
                <?php 
            }else{
                ?>
                <option value="<?= $a->id?>"><?= $a->name?></option>
                <?php
            }
            ?>
                <?php endforeach;?>
            </select>
        </div>
        <div>
            <span>Chọn Ảnh:</span>
            <input type="text" name="image" value="<?=$product1->image?>">
            <input type="file" name="file_upload">
        </div>
        <a href="?action=Product-list">Quay Lại</a>
        <button type="submit" name="nut">Cập Nhật</button>
    </form>
</body>
</html>
