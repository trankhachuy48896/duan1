
<!-- Trang client -->
<?php

require_once "commons/env.php";
require_once "commons/functions.php";
require_once "models/danhmuc.php";
require_once "models/sach.php";
require_once "models/khachhang.php";
require_once "models/BL_admin.php";

require_once "controllers/binhluanController.php";


require_once "controllers/homeController.php";
require_once "controllers/khachhangController.php";
require_once "controllers/baivietController.php";
require_once "controllers/lienheController.php";
require_once "controllers/gioithieuController.php";
require_once "controllers/storeController.php";
require_once "controllers/sachController.php";
require_once "controllers/giohangController.php";








$ctl = $_GET['ctl'] ?? "";

match ($ctl) {
    "" => (new homeController) -> index(),

    "baiviet" => (new baiviet) ->baiviet(),
    "lienhe" => ( new lienhe) ->lienhe(),
    "gioithieu" => ( new gioithieu) ->gioithieu(),
    "add_bl" => (new binhluanController) -> push_bl(),
    "comment" => (new binhluanController) -> add_bl(),


    "store" => (new store) -> store(),
    // Form đăng ký, đăng nhập
    "form_dangnhap" => (new khachhangController) -> form_login(),
    "form_dangky" => (new khachhangController) -> form_sign_up(),
    "add_dki" => (new khachhangController)-> sign_up(),
    // Chi tiết sản phẩm
    "chi_tiet" => (new sachController) -> chi_tiet(),
    // Giỏ hàng
    "gio_hang" => (new giohangController) -> gio_hang(),
    // Sản phẩm theo danh mục
    "danhmuc_sach" => (new sachController) -> sachIndanhmuc(),
    // Tìm kiếm
    "search" => (new sachController) -> search(),
    //bình luận



    default => view('404'),
};
