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
        $email = $_POST['email'];
        $address = $_POST['address'];
        $birthday = $_POST['birthday'];
        $user = $this->model->handleRegister(
            $fullname,
            $username,
            $password,
            $phone,
            $email,
            $birthday,
            $address
        );
        header('Location: ./auth.php');

        // $errors = [];

        // if ($_SERVER["REQUEST_METHOD"] == "POST") {
        //     $username = trim($_POST['username']);
        //     $password = $_POST['password'];
        //     $email = trim($_POST['email']);
        //     $birthday = $_POST['birthday'] ?? '';

        //     // Kiểm tra tài khoản
        //     if (empty($username)) {
        //         $errors[] = "Tên tài khoản không được để trống.";
        //     } elseif (strlen($username) < 3 || strlen($username) > 30) {
        //         $errors[] = "Tên tài khoản phải từ 3 đến 30 ký tự.";
        //     }

        //     // Kiểm tra mật khẩu
        //     if (empty($password)) {
        //         $errors[] = "Mật khẩu không được để trống.";
        //     } elseif (strlen($password) < 6 || strlen($password) > 30) {
        //         $errors[] = "Mật khẩu phải từ 6 đến 30 ký tự.";
        //     }

        //     // Kiểm tra định dạng email
        //     if (empty($email)) {
        //         $errors[] = "Email không được để trống.";
        //     } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        //         $errors[] = "Email không đúng định dạng.";
        //     }

        //     if (empty($birthday)) {
        //         $errors[] = "Xin hãy nhập ngày sinh.";
        //     }

        //     // Nếu không có lỗi thì xử lý đăng ký (ví dụ lưu CSDL)
        //     if (empty($errors)) {
        //         // Xử lý thêm người dùng ở đây (ví dụ gọi User::register())
        //         header("Location: auth.php?controller=auth&action=loginForm");
        //         exit;
        //     }
        // }

        // // Hiển thị giao diện form và truyền biến $errors
        // include 'views/auth/register.php';


    }
}
