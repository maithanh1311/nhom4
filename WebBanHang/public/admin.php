<?php

session_start();
if(!isset($_SESSION['admin'])){
    header('Location: ./auth.php');
}

$controllerName = $_GET['controller'] ?? 'admin';
$action = $_GET['action'] ?? 'index';
$controllerClass = $controllerName . 'Controller';
require_once "./../controller/{$controllerClass}.php";
$controller = new $controllerClass();
$controller->$action();