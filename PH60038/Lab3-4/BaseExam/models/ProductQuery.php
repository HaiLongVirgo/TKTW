<?php 
    class ProductQuery extends BaseModel  { //extends sử dụng quyền truy cập vào
        // Hàm xử lý logic lấy danh sách
        public function all(){
            try{
               $sql = "SELECT products.*, categories.name AS category_name FROM products JOIN categories ON products.category_id = categories.id";
               $data = $this->pdo->query($sql)->fetchAll();
               $sanpham = [];
               foreach($data as $value) {
                $object = new Products();
                $object->id = $value["id"];
                $object->name = $value["name"];
                $object->price = $value["price"];
                $object->image = $value["image"];
                $object->description = $value["description"];
                $object->category_name = $value["category_name"];
                $sanpham[] = $object; 

               }
               return $sanpham;
            }catch(Exception $error){
                echo "Lỗi :".$error->getMessage();
            }
        }
        public function create(Products $products){
      try{
       $sql = "INSERT INTO `products` (`id`, `name`, `price`, `image`, `description`, `category_id`) VALUES (NULL, '".$products->name."', '".$products->price."','".$products->image."','".$products->description."', '".$products->category_name."');";
       $data = $this->pdo->exec($sql);
       return $data;
      }catch(Exception $error){
        echo "Lỗi<br>".$error->getMessage();
       }
    }
    public function delete($id) {
            try {
                $sql = "DELETE FROM products WHERE `products`.`id` = $id";
                $data = $this->pdo->exec($sql);
                return $data;
            } catch(Exception $error) {
                echo "Lỗi: " .$error->getMessage() ."<br>";
            }
        }
    public function find($id){
        try{
$sql = "SELECT * FROM `products` WHERE id = $id";
$data = $this->pdo->query($sql)->fetch();
if($data === false){
    echo "Bản ghi không tồn tại<br>";
    return;
}else{
    $Product = new Products();
    $Product->id = $data["id"];
    $Product->name = $data["name"];
    $Product->price = $data["price"];
    $Product->image = $data["image"];
    $Product->description = $data["description"];
    $Product->category_id = $data["category_id"];
    return $Product;
}
        }catch(Exception $error){
            echo "lỗi<br>".$error->getMessage();
        }
       }
    public function update(Products $products){
        try{
          $sql = "UPDATE products SET
    name = '$products->name',
    price = '$products->price',
    image = '$products->image',
    description = '$products->description',
    category_id = '$products->category_id'
WHERE id = $products->id";

          $data = $this->pdo->exec($sql);
          return $data;
        }catch(Exception $error){
            echo "lỗi<br>".$error->getMessage();    
        }
       }

    }

?>