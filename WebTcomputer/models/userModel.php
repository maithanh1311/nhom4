<?php
require_once("../config/database.php");

class userModel
{
    private $pdo;

    public function __construct()
    {
        $this->pdo = Database::connect();
    }

    // Hàm xử lý Đăng nhập
    public function handleLogin($username, $password)
    {
        $stmt = $this->pdo->prepare("SELECT * FROM users WHERE username=? AND password=?");
        $stmt->execute([$username, $password]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    // Phương thức hiển thị danh sách sản phẩm
    public function getAll()
    {
        return $this->pdo->query("SELECT * FROM users ORDER BY id DESC")->fetchAll(PDO::FETCH_ASSOC);
    }

    // Phương thức thêm mới form user
    public function add($fullname, $username, $password, $phone,  $email, $birthday, $address, $role)
    {
        $stmt = $this->pdo->prepare(
            "INSERT INTO users (fullname, username, password, email, phone, address, role, birthday) 
            VALUES (?, ?, ?, ?, ?, ?, ?, ?)"
        );
        return $stmt->execute([$fullname, $username, $password, $email, $phone, $address, $role, $birthday]);
    }

    //Phương thức lấy dữ liệu 1 user
    public function findById($id)
    {
        $stmt = $this->pdo->prepare("SELECT * FROM users WHERE id=?");
        $stmt->execute([$id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    // Cập nhật dữ liêu
    public function update(
        $id,
        $fullname,
        $username,
        $password,
        $phone,
        $email,
        $birthday,
        $address,
        $role
    ) {
        $stmt = $this->pdo->prepare("UPDATE users SET
            fullname=?, 
            username=?, 
            password=?,
            email=?,
            birthday=?,
            phone=?,
            address=?,
            role=?
            WHERE id=?");
        return $stmt->execute([$fullname, $username, $password, $email, $birthday, $phone, $address, $role, $id]);
    }

    //Phương thức Xóa
    public function delete($id)
    {
        $stmt = $this->pdo->prepare("DELETE FROM users WHERE id=?");
        $stmt->execute([$id]);
    }
    
    public function handleRegister(
        $fullname,
        $username,
        $password,
        $phone,
        $email,
        $birthday,
        $address
    ) {
        $stmt = $this->pdo->prepare(
            "INSERT INTO users (fullname, username, password, email, phone, address,  birthday) 
            VALUES (?, ?, ?, ?, ?, ?, ?)"
        );
        return $stmt->execute([$fullname, $username, $password, $email, $phone, $address,  $birthday]);
    }
}
