<?php
// đường dẫn có tham số controller và action
// nếu không có  thì mặc định vào dashboard / index
session_start();

// nếu chưa tồn tại user đăng nhập 
// và không có quyền admin thì quay về trang đăng nhập
if(!isset($_SESSION['admin'])){
    header('Location: ./auth.php');
}

$controllerName = $_GET['controller'] ?? 'admin';
$action = $_GET['action'] ?? 'index';

$controllerClass = $controllerName . 'Controller';
require_once "./../controllers/{$controllerClass}.php";
$controller = new $controllerClass();
$controller->$action();
