<?php

class dh_adminController
{

    // Chỉ cho phép người dùng đã đăng nhập và có quyền admin truy cập trang quản trị
    public function __construct()
    {
        $khachhang = $_SESSION['khachhang'] ?? [];
        if (!$khachhang || $khachhang['role'] != 1) {
            return header("location: ../index.php");
        }
    }


    public function list_dh()
    {
        $orders = (new dh_adminModel)->all_dh();
        view_admin("donhang/list_dh", ['orders' => $orders]);
    }

    public function update_dh()
    {
        $id_dh = $_GET['id_dh'];
        // Thay đổi trạng thái
        if ($_SERVER['REQUEST_METHOD'] === "POST") {
            $status = $_POST['status'];
            (new dh_adminModel)->updateStatus($id_dh, $status);
            header("location: index.php?ctl=list_dh");
            die;
        }
        $order = (new dh_adminModel)->find_dh($id_dh);
        $order_details = (new dh_adminModel)->listOrderDetail($id_dh);
        $status = (new dh_adminModel)->status_details;
        view_admin("donhang/edit_dh", ['order' => $order, 'order_details' => $order_details, 'status' => $status]);
       
    }
}
