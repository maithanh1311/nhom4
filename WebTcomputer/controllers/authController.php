<?php
require_once "./../models/userModel.php";
class authController
{
    // Khởi tạo thuộc tính $model
    private $model;
    public function __construct()
    {
        // kết nối $model từ userModel
        $this->model = new userModel();
    }

    // Trang đăng nhập
    public function loginForm()
    {
        include './../views/auth/login.php';
    }

    // Xây dựng chức năng đăng nhập
    public function login()
    {
        $username = $_POST['username'];
        $password = $_POST['password'];
        $user = $this->model->handleLogin($username, $password);
        if ($user && $user['role'] == 1) {
            // tài khoản admin
            $_SESSION['admin'] = $user;
            header('Location: ./admin.php');
        } elseif ($user && $user['role'] == 0) {
            // tài khoản từ phía máy khách
            $_SESSION['client'] = $user;
            header('Location: ./client.php');
        } else {
            die('Tài khoản hoặc mật khẩu không đúng');
        }
    }

    // Trang đăng ký
    public function registerForm()
    {
        include './../views/auth/register.php';
    }

    public function register()
    {
        $fullname = $_POST['fullname'];
        $username = $_POST['username'];
        $password = $_POST['password'];
        $phone = $_POST['phone'];
        $email= $_POST['email'];
        $address= $_POST['address'];
        $birthday= $_POST['birthday'];
        $user = $this->model->handleRegister(
            $fullname, 
        $username, 
        $password, 
        $phone,  
        $email, 
        $birthday, 
        $address);
        header('Location: ./auth.php');
    }
}
