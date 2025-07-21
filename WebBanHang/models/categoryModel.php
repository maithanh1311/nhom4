<?php
require_once("../config/connectDB.php");
class CategoryModel
{
    private $pdo;
    public function __construct()
    {
        $this->pdo = ConnectDB::connect();
    }

     // Phương thức hiển thị danh sách sản phẩm
     public function getAll()
     {
         return $this->pdo->query("SELECT * FROM category")->fetchAll(PDO::FETCH_ASSOC);
     }
     public function find($id)
     {
         $stmt = $this->pdo->prepare("SELECT * FROM category WHERE id = ?");
         $stmt->execute([$id]);
         return $stmt->fetch(PDO::FETCH_ASSOC);
     }
     // Phương thức thêm mới form sản phẩm
     public function add($name, $price, $description, $image)
     {
         $stmt = $this->pdo->prepare(
             "INSERT INTO category (name, price, description, image) 
             VALUES (?, ?, ?, ?)");
         return $stmt->execute([$name, $price, $description, $image]);
     }
     //Phương thức lấy dữ liệu 1 sản phẩm
     public function findById($id)
     {
         $stmt = $this->pdo->prepare("SELECT * FROM category WHERE id=?");
         $stmt->execute([$id]);
         return $stmt->fetch(PDO::FETCH_ASSOC);
     }
     // Cập nhật dữ liêu
     public function update($id, $name, $price, $description, $image)
     {
         $stmt = $this->pdo->prepare("UPDATE category SET
             name=?, 
             price=?, 
             description=?, 
             image=? 
             WHERE id=?");
         return $stmt->execute([$name, $price, $description, $image, $id]);
     }
     //Phương thức Xóa sản phẩm
     public function delete($id)
     {
         $stmt = $this->pdo->prepare('DELETE FROM category WHERE id=?');
         $stmt->execute([$id]);
     }
     public function search($search) {
        $stmt = $this->pdo->prepare("SELECT * FROM category WHERE name LIKE ?");
        $stmt->execute(["%$search%"]);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
     

}