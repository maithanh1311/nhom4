<?php 
session_start();

if(isset($_SESSION['admin'])){
    header('Location: ./admin.php');
}else if(isset($_SESSION['clinet'])){
    header('Location: ./client.php');
}

$controllerName = $_GET['controller'] ?? 'auth';
$action = $_GET['action'] ?? 'loginForm';

$controllerClass = $controllerName . 'Controller';
require_once "./../controller/{$controllerClass}.php";
$controller = new $controllerClass();
$controller->$action();

// if (file_exists($controllerFile)) {
//     require_once $controllerFile;
//     $controllerObject = new $controllerName();

//     if (method_exists($controllerObject, $action)) {
//         $controllerObject->$action();
//     } else {
//         echo "Không tìm thấy action $action";
//     }
// } else {
//     echo "Không tìm thấy controller $controllerName";
// }
?>
