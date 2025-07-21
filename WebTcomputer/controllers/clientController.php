<?php
require_once "./../models/productModel.php";
require_once "./../models/categoryModel.php";
class clientController
{
    private $modelProduct;
    private $modelCategory;
    public function __construct()
    {
        $this->modelProduct = new productModel();
        $this->modelCategory = new categoryModel();
    }

    public function index()
    {
        // Hiển thị sản phẩm nổi bật
        $products = $this->modelProduct->getDesc();
        // Hiển thị danh mục
        $category = $this->modelCategory->getAll();
        include "./../views/client/layout.php";
    }

    public function findCategory()
    {
        // tạo 1 biến gán id của category
        $categoryId = $_GET['category_id'];
        // Hiển thị danh mục
        $category = $this->modelCategory->getAll();
        // Lấy tên danh mục
        $findByCat = $this->modelCategory->findById($categoryId);
        // Hiển danh sản phẩm theo danh mục
        $products = $this->modelCategory->getProductByCat($categoryId);
        include "./../views/client/findCategory.php";
    }

    // Tìm kiếm sản phẩm
    public function search() {
        $search = $_GET['search'];
        $products = $this->modelProduct->search($search);
        $category = $this->modelCategory->getAll();
        include "./../views/client/search.php";
    }

    public function logout()
    {
        session_start();
        if (isset($_SESSION['client']) && $_SESSION['client']) {
            unset($_SESSION['client']);
            header("Location: ./client.php");
        }
    }
}
