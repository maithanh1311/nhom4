<?php
require_once "./../models/productModel.php";
require_once "./../models/categoryModel.php";

class productController {
    // Khởi tạo thuộc tính $model
    private $model;
    private $modelCategory;
    public function __construct() {
        // kết nối $model từ ProductModel
        $this->model = new productModel();
        $this->modelCategory = new categoryModel();
    }

    // hiên thị danh sách sản phẩm
    public function index() {
        $products = $this->model->getAll();
        include "./../views/admin/product/list.php";
    }

     // Phương thức xử lý hình ảnh image
    private function handleImage($file){
        // Khởi tạo đường dẫn thư mục upload
        $folder = "./../public/uploads/";
        // Khởi tạo tên tệp ảnh
        $fileName = time(). "_". $file['name'];
        // khởi tạo bản lưu nháp của ảnh
        $fileTmp = $file['tmp_name'];
        $pathName="./uploads/$fileName";
        // trường hợp chưa tồn tại thư mục uploads thì khởi tạo thư mục
        if(!file_exists($folder)){
            mkdir($folder,0775, true);
        }

        // trường hợp chưa tồn tại ảnh thì lưu thì lưu ảnh lại
        if(!file_exists($folder . $fileName)){
            // check trường truyền ảnh nếu truyền vào thành công thì lưu tên ảnh
            if(move_uploaded_file($fileTmp, $folder . $fileName)){
                return $pathName;
            }
        }

        // trường hợp ko upload ảnh trả về rỗng
        return "";
    }
    // form thêm mới sản phẩm
    public function add() {
        $category = $this->modelCategory->getAll();
        include "./../views/admin/product/add.php";
    }

    // Lưu dữ liệu thêm mới sản phẩm
    public function store() {
        // xử lý hình ảnh
        $image = $this->handleImage($_FILES['image']);
        $name = $_POST['name'];
        $price = $_POST['price'];
        $description = $_POST['description'];
        $catId = $_POST['category_id'];
        $this->model->add($name, $price, $description, $image, $catId);
        header("Location: ./admin.php?controller=product&action=index");
    }

    // Form chỉnh sửa sản phẩm
    public function edit() {
        $category = $this->modelCategory->getAll();
        $product = $this->model->findById($_GET['id']);
        include './../views/admin/product/edit.php';
    }

    // Cập nhật dữ liệu sản phẩm
    public function update() {
        $image = $this->handleImage($_FILES['image']) ?: $_POST['image_old'];
        $name = $_POST['name'];
        $price = $_POST['price'];
        $description = $_POST['description'];
        $id = $_POST['id'];
        $catId = $_POST['category_id'];
        $this->model->update($id, $name, $price,$description,$image, $catId);
        header("Location: ./admin.php?controller=product&action=index");
    }

    // Xóa dữ liệu sản phẩm
    public function delete() {
        $this->model->delete($_GET['id']);
        header("Location: ./admin.php?controller=product&action=index");
    }
}

