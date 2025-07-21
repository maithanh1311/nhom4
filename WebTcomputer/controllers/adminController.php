<?php
class adminController {
    public function index() {
        include "./../views/admin/layout.php";
    }

    public function logout() {
        if(isset($_SESSION['admin']) && $_SESSION['admin']) {
            unset($_SESSION['admin']);
            header('Location: ./auth.php');
        }
    }
}