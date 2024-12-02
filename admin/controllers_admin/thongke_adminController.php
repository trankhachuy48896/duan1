<?php

class thongke_adminController
{

    // Chỉ cho phép người dùng đã đăng nhập và có quyền admin truy cập trang quản trị
    public function __construct()
    {
        $khachhang = $_SESSION['khachhang'] ?? [];
        if (!$khachhang || $khachhang['role'] != 1) {
            return header("location: ../index.php");
        }
    }

    public function list_thongke()
    {
        view_admin("thongke/list_thongke");
    }
}
