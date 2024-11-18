
<!-- Trang client -->
<?php

require_once "commons/env.php";
require_once "commons/functions.php";
require_once "controllers/homeController.php";
require_once "controllers/khachhangController.php";
require_once "controllers/binhluanController.php";
require_once "controllers/lienheController.php";
require_once "controllers/gioithieuController.php";
require_once "controllers/storeController.php";
require_once "controllers/sachController.php";





$ctl = $_GET['ctl'] ?? "";

match ($ctl) {
    "" => (new homeController) -> index(),

    "baiviet" => (new binhluan) ->binhluan(),
    "lienhe" => ( new lienhe) ->lienhe(),
    "gioithieu" => ( new gioithieu) ->gioithieu(),

    "store" => (new store) -> store(),
    // Form đăng ký, đăng nhập
    "form_dangnhap" => (new khachhangController) -> login(),
    "form_dangky" => (new khachhangController) -> sign_up(),
    // Chi tiết sản phẩm
    "chi_tiet" => (new sachController) -> chi_tiet(),
    // Giỏ hàng
    "gio_hang" => (new giohangController) -> gio_hang(),

    default => view('404'),
};
