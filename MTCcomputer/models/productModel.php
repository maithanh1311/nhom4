<?php
require_once("../config/database.php");
class productModel
{
    private $pdo;
    public function __construct()
    {
        $this->pdo = Database::connect();
    }
    // Phương thức hiển thị danh sách sản phẩm
    public function getAll()
    {
        return $this->pdo->query("SELECT 
            products.*,
            categories.name AS category_name
        FROM 
            products
        LEFT JOIN 
            categories ON products.category_id = categories.id ORDER BY id DESC")->fetchAll(PDO::FETCH_ASSOC);
    }
    public function find($id)
    {
        $stmt = $this->pdo->prepare("SELECT * FROM products WHERE id = ?");
        $stmt->execute([$id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
    // Phương thức thêm mới form sản phẩm
    public function add($name, $price, $description, $image, $catId)
    {
        $stmt = $this->pdo->prepare(
            "INSERT INTO products (name, price, description, image, category_id) 
            VALUES (?, ?, ?, ?, ?)");
        return $stmt->execute([$name, $price, $description, $image, $catId]);
    }
    //Phương thức lấy dữ liệu 1 sản phẩm
    public function findById($id)
    {
        $stmt = $this->pdo->prepare("SELECT * FROM products WHERE id=?");
        $stmt->execute([$id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
    // Cập nhật dữ liêu
    public function update($id, $name, $price, $description, $image, $catId)
    {
        $stmt = $this->pdo->prepare("UPDATE products SET
            name=?, 
            price=?, 
            description=?, 
            image=?,
            category_id=?
            WHERE id=?");
        return $stmt->execute([$name, $price, $description, $image, $catId, $id]);
    }
    //Phương thức Xóa sản phẩm
    public function delete($id)
    {
        $stmt = $this->pdo->prepare('DELETE FROM products WHERE id=?');
        $stmt->execute([$id]);
    }

    public function search($search) {
        $stmt = $this->pdo->prepare("SELECT * FROM products WHERE name LIKE ?");
        $stmt->execute(["%$search%"]);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getDesc() {
        return $this->pdo->query("SELECT * FROM products ORDER BY id DESC LIMIT 6")
        ->fetchAll(PDO::FETCH_ASSOC);
    }
}
