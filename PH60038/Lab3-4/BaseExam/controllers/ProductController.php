<?php 
    class ProductController{
        public $ProductQuery;
        public $categoryQuery;
        public function __construct(){
            $this->ProductQuery = new ProductQuery();
             $this->categoryQuery = new categoryQuery();
        }
        public function __destruct(){}
        public function list(){
            $danhsach = $this->ProductQuery->all();
            include "views/Product/list.php";
        }
        public function create(){
        $danhsach = $this->categoryQuery->all();
        $Product = new Products();
        if(isset($_POST["nut"])){
           $Product->name = trim($_POST["name"]);
           $Product->price = trim($_POST["price"]);
           $Product->description = trim($_POST["description"]);
           $Product->category_name = trim($_POST["category_name"]);
           if(isset($_FILES["file_upload"]) && $_FILES["file_upload"]["size"] >0){
            $Product->image = upload_file('cate', $_FILES["file_upload"]);
           }
           $data = $this->ProductQuery->create($Product);
           if($data == 1){
            header("Location:?action=Product-list");
           }
        }
        include "views/Product/create.php";
    }
    public function detail($id){
            $courses1 = $this->ProductQuery->find($id);
            $danhsach = $this->categoryQuery->all();
        include "views/Product/detail.php";
       
    }
    public function update($id){
        $danhsach = $this->categoryQuery->all();
        $product1 = $this->ProductQuery->find($id);
        $Product = new Products();
        $Product->id = $id;
        if(isset($_POST["nut"])){
           $Product->name = trim($_POST["name"]);
           $Product->price = trim($_POST["price"]);
           $Product->description = trim($_POST["description"]);
           $Product->category_id = trim($_POST["category_id"]);
           if(isset($_FILES["file_upload"]) && $_FILES["file_upload"]["size"] >0){
            $Product->image = upload_file('cate', $_FILES["file_upload"]);
           }else{
            $Product->image = $product1->image;
           }
          $data = $this->ProductQuery->update($Product);

           if($data == 1 ){
            header("Location:?action=Product-list");
           }else{
            header("Location:?action=Product-list");
           }
        }
        include "views/Product/update.php";
    }

     public function delete($id) {
        $this->ProductQuery->delete($id);
        // Sau khi xóa xong có thể chuyển hướng (redirect) hoặc load lại danh sách
        header("Location: ?action=Product-list");
    }
}

?>