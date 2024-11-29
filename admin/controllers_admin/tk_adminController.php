<?php
class tk_adminController
{

    // Chỉ cho phép người dùng đã đăng nhập và có quyền admin truy cập trang quản trị
    public function __construct()
    {
        $khachhang = $_SESSION['khachhang'] ?? [];
        if (!$khachhang || $khachhang['role'] != 1) {
            return header("location: ../index.php");
        }
    }

    public function list_tk()
    {
        $users = (new kh_adminModel)->all_kh();
        view_admin("taikhoan/list_tk", ['users' => $users]);
    }
    public function form_add_tk()
    {
        view_admin("taikhoan/add_tk");
    }


    public function add_tk()
    {
        $user = $_POST;
        (new kh_adminModel)->add_kh($user);
        header('location: index.php?ctl=list_tk');
        die;
    }
    public function edit_tk()
    {
        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            $user = $_POST;
            (new kh_adminModel)->update_kh($user);
            header('location: index.php?ctl=list_tk');
            die;
        }
        $id_kh = $_GET['id_kh'];
        $user = (new kh_adminModel)->find_one_kh($id_kh);
        view_admin("taikhoan/edit_tk", ['user' => $user]);
    }

    public function delete_tk()
    {
        $id_kh = $_GET['id_kh'];
        (new kh_adminModel)->delete_kh($id_kh);
        header("location: index.php?ctl=list_tk");
        die;
    }
}
