<?php
class khachhangController{
    public function form_login() {
        view("login");
    }

    public function form_sign_up() {
        view("sign_up");
    }

    public function sign_up() {
        $khachhang = $_POST;
        (new khach_hang) -> add_dki($khachhang);
        header("Location: index.php?ctl=form_dangnhap");
        die;
    }
}
?>