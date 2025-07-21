<?php
class Database {
    public static function connect() {
        $host = 'localhost';
        $dbname = 'tcomputer';
        $user = 'root';
        $pass = '';
        try {
        $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $user, $pass);
            // thiết lập chế độ xử lý lỗi (error handling) cho đối tượng PDO trong PHP
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            // trả kết quả
            return $pdo;
        } catch (PDOException $e) {
            die("Kết nối thất bại: " . $e->getMessage());
        }
    }
}
?>

