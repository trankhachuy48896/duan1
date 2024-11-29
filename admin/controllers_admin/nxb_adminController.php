<?php

class nxb_adminController
{
    // Chỉ cho phép người dùng đã đăng nhập và có quyền admin truy cập trang quản trị
    public function __construct()
    {
        $khachhang = $_SESSION['khachhang'] ?? [];
        if (!$khachhang || $khachhang['role'] != 1) {
            return header("location: ../index.php");
        }
    }
    
    // Truyền dữ liệu vào trong views_admin
    public function list_nxb()
    {
        $publishers = (new nxb_adminModel)->all_nxb();
        view_admin("nhaxuatban/list_nxb", ['publishers' => $publishers]);
    }

    public function form_add_nxb()
    {
        view_admin("nhaxuatban/add_nxb");
    }

    public function add_nxb()
    {
        $publisher = $_POST;
        (new nxb_adminModel)->add_nxb($publisher);
        header('location: index.php?ctl=list_nxb');
        die;
    }

    public function edit_nxb()
    {
        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            $publisher = $_POST;
            (new nxb_adminModel)->update_nxb($publisher);
            header('location: index.php?ctl=list_nxb');
            die;
        }
        $id_nxb = $_GET['id_nxb'];
        $publisher = (new nxb_adminModel)->find_one_nxb($id_nxb);
        view_admin("nhaxuatban/edit_nxb", ['publisher' => $publisher]);
    }

    public function delete_nxb()
    {
        $id_nxb = $_GET['id_nxb'];
        (new nxb_adminModel)->delete_nxb($id_nxb);
        header("location: index.php?ctl=list_nxb");
        die;
    }
}
