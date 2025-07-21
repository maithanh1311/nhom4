<?php
class ConnectDB
{
    public static function connect()
    {
        $host = 'localhost';
        $database = 'banlinhkiens';
        $user = 'root';
        $password = '';
        
        try {
            
            $pdo = new PDO("mysql:host=$host;dbname=$database;charset=utf8", $user, $password);
           
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $pdo;
        } catch (PDOException $e) {
            die('Kết nối thất bại: ' . $e->getMessage());
        }
    }
}
// $connect = ConnectDB::connect();
