<?php

class sach_adminController
{
    // Chỉ cho phép người dùng đã đăng nhập và có quyền admin truy cập trang quản trị
    public function __construct()
    {
        $khachhang = $_SESSION['khachhang'] ?? [];
        if (!$khachhang || $khachhang['role'] != 1) {
            return header("location: ../index.php");
        }
    }
    
    public function form_add_sach()
    {
        $nhaxuatban = (new nxb_adminModel) -> all_nxb();
        $danhmuc = (new dm_adminModel) -> all_DM();
        view_admin("sach/add_sach", ['nhaxuatban'=> $nhaxuatban, 'danhmuc' => $danhmuc]);
    }

    public function list_Sach()
    {
        $products = (new sach_adminModel)->all_sach();
        view_admin("sach/list_sach", ['products' => $products]);
    }

    public function add_sach()
    {
        $product = $_POST;

        $img_sp = "";
        $file_anh = $_FILES['img_sp'];
        if ($file_anh['size'] > 0) {
            $img_sp = "../img/" . basename($file_anh['name']);
            move_uploaded_file($file_anh['tmp_name'], $img_sp);
        }
        $product['img_sp'] = $img_sp;
        $product['status_sp'] = (int) $product['status_sp'];
        (new sach_adminModel)->add_sach($product);
        header("location: index.php?ctl=list_sach");
        die;
    }

    public function edit_sach() {
        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            $product = $_POST;
            $file_anh = $_FILES['img_sp'];
            if ($file_anh['size'] > 0) {
                $img_sp = "../img/" . basename($file_anh['name']);
                move_uploaded_file($file_anh['tmp_name'], $img_sp);
            } else {
                // Nếu không chọn ảnh mới, giữ ảnh cũ
                $img_sp = $product['img_sp'];
            }

            $product['img_sp'] = $img_sp;
            (new sach_adminModel)->update_sach($product);
            header("location: index.php?ctl=list_sach");
            die;
        }
        $id_sp = $_GET['id_sp'];
        $product = (new sach_adminModel)->find_one_sp($id_sp);
        $category = (new dm_adminModel)->all_DM();
        $nhaxuatban = (new nxb_adminModel) -> all_nxb();
        view_admin("sach/edit_sach", ['product' => $product, 'category' => $category, 'nhaxuatban' => $nhaxuatban]);
        
    }  

    // Xóa sản phẩm
    public function delete_sach() {
        $id_sp = $_GET['id_sp'];
        (new sach_adminModel)->delete_sach($id_sp);
        header("location: index.php?ctl=list_sach");
        die;
    }
}