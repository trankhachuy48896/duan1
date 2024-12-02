<?php

class tg_adminController
{
    // Chỉ cho phép người dùng đã đăng nhập và có quyền admin truy cập trang quản trị
    public function __construct()
    {
        $khachhang = $_SESSION['khachhang'] ?? [];
        if (!$khachhang || $khachhang['role'] != 1) {
            return header("location: ../index.php");
        }
    }
    
    public function list_tg()
    {
        $authors = (new tg_adminModel)->all_tg();
        view_admin("tacgia/list_tg", ['authors' => $authors]);
    }

    public function form_add_tg()
    {
        view_admin("tacgia/add_tg");
    }

    public function add_tg()
    {
        $author = $_POST;
        (new tg_adminModel)->add_tg($author);
        header('location: index.php?ctl=list_tg');
        die;
    }

    public function edit_tg()
    {
        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            $author = $_POST;
            (new tg_adminModel)->update_tg($author);
            header('location: index.php?ctl=list_tg');
            die;
        }
        $id_tg = $_GET['id_tg'];
        $author = (new tg_adminModel)->find_one_tg($id_tg);
        view_admin("tacgia/edit_tg", ['author' => $author]);
    }

    public function delete_tg()
    {
        $id_tg = $_GET['id_tg'];
        (new tg_adminModel)->delete_tg($id_tg);
        header("location: index.php?ctl=list_tg");
        die;
    }
}
