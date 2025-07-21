<?php
// đường dẫn có tham số controller và action
// nếu không có  thì mặc định vào dashboard / index
$controllerName = $_GET['controller'] ?? 'client';
$action = $_GET['action'] ?? 'index';

$controllerClass = $controllerName . 'Controller';
require_once "./../controllers/{$controllerClass}.php";
$controller = new $controllerClass();
$controller->$action();
