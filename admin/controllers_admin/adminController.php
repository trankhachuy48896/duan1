<?php

class adminController
{

    // Chỉ cho phép người dùng đã đăng nhập và có quyền admin truy cập trang quản trị
    public function __construct()
    {
        $khachhang = $_SESSION['khachhang'] ?? [];
        if (!$khachhang || $khachhang['role'] != 1) {
            return header("location: ../index.php");
        }
    }

    public function index_admin()
    {
        $categories = (new dm_adminModel)->all_DM();
        view_admin("home_admin", ['categories' => $categories]);
    }

    public function logout()
    {
        session_start();
        session_destroy();
        header("Location: ../index.php");
        exit();
    }
}
