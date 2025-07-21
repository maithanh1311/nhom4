<?php
require './../models/userModel.php';
class UserController{
    private $model;
    public function __construct(){
        $this->model = new UserModel();
    }
    public function index(){
        $users = $this->model->getALL();
        include './../views/admin/user/list.php';
    }
    public function add(){
        include './../views/admin/user/add.php';
    }
    public function store()
    {
        $username = $_POST['username'];
        $password = $_POST['password'];
        $email = $_POST['email'];
        $fullname = $_POST['fullname'];
        $phone = $_POST['phone'];
        $birthday = $_POST['birthday'];
        $address = $_POST['address'];
        $role = $_POST['role'];
        // lưu dữ liệu sản phầm vào data base 
        $this->model->add($fullname,$username,$password,$email,$phone,$birthday,$address,$role);
        header('Location: ./admin.php?controller=user&action=index');
    }
    public function edit()
    {
        $id = $_GET['id'];
        $user = $this->model->findById($id);
       
        include './../views/admin/user/edit.php';
    }
    // cập nhật dữ liệu của 1 sản phẩm
    public function update()
    {
        $id = $_POST['id'];
        $username = $_POST['username'];
        $password = $_POST['password'];
        $email = $_POST['email'];
        $fullname = $_POST['fullname'];
        $phone = $_POST['phone'];
        $birthday = $_POST['birthday'];
        $address = $_POST['address'];
        $role = $_POST['role'];
        $this->model->update($id,$fullname,$username,$password,$email,$phone,$birthday,$address,$role);
        header('Location: ./admin.php?controller=user&action=index');
    }
    public function delete(){
        $this->model->delete($_GET['id']);
        header('Location: ./admin.php?controller=user&action=index');
    }
    public function search(): void
    {
        $search   = $_GET['search'];
        $user = $this->model->search(search: $search);
        include "./../views/admin/user/list.php";
    }
}