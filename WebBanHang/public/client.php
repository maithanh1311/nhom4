<?php
$controllerName = $_GET['controller'] ?? 'client';
$action = $_GET['action'] ?? 'index';

$controllerClass = $controllerName . 'Controller';
require_once "./../controller/{$controllerClass}.php";
$controller = new $controllerClass();
$controller->$action();
