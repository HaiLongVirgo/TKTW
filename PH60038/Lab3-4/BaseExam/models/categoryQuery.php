<?php
class categoryQuery extends BaseModel{
   public function all(){ 
       try{
         $sql = "SELECT * FROM `categories`";
         $data = $this->pdo->query($sql)->fetchAll();
         $arr = [];
         foreach($data as $a){
            $category = new category();
            $category->id = $a["id"];
             $category->name = $a["name"];
            $arr[] = $category;
         }
         return $arr;
       }catch(Exception $error){
        echo "Lỗi<br>".$error->getMessage();
       }
    }
}
?>