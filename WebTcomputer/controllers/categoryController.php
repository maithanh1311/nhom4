<?php
require_once "./../models/categoryModel.php";

class CategoryController {
    private $model;
    public function __construct() {
        $this->model = new categoryModel();
    }

    // hiên thị danh sách loại sản phẩm
    public function index() {
        $category = $this->model->getAll();
        include "./../views/admin/category/list.php";
    }

    
    // form thêm mới loại sản phẩm
    public function add() {
        include "./../views/admin/category/add.php";
    }

    // Lưu dữ liệu thêm mới loại sản phẩm
    public function store() {
        // xử lý hình ảnh
        $name = $_POST['name'];
        $description = $_POST['description'];
        $this->model->add($name,  $description);
        header("Location: ./admin.php?controller=category&action=index");
    }

    // Form chỉnh sửa loại sản phẩm
    public function edit() {
        $category = $this->model->findById($_GET['id']);
        include './../views/admin/category/edit.php';
    }

    // Cập nhật dữ liệu loại sản phẩm
    public function update() {
        $name = $_POST['name'];
        $description = $_POST['description'];
        $id = $_POST['id'];
        $this->model->update($id, $name,  $description);
        header("Location: ./admin.php?controller=category&action=index");
    }

    // Xóa dữ liệu loại sản phẩm
    public function delete() {
        $this->model->delete($_GET['id']);
        header("Location: ./admin.php?controller=category&action=index");
    }
}