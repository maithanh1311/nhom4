<?php
session_start();
if(isset($_SESSION['admin'])){
    header('Location: ./admin.php');
}else if(isset($_SESSION['client'])){
    header('Location: ./client.php');
}
$controllerName = $_GET['controller'] ?? 'auth';
$action = $_GET['action'] ?? 'loginForm';

$controllerClass = $controllerName . 'Controller';
require_once "./../controllers/{$controllerClass}.php";
$controller = new $controllerClass();
$controller->$action();
