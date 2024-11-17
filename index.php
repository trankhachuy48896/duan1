<!-- Trang client -->

<?php

require_once "commons/env.php";
require_once "commons/functions.php";
require_once "controllers/homeController.php";
require_once "controllers/khachhangController.php";
require_once "controllers/sachController.php";



$ctl = $_GET['ctl'] ?? "";

match ($ctl) {
    "" => (new homeController) -> index(),
    "form_dangnhap" => (new khachhangController) -> login(),
    "form_dangky" => (new khachhangController) -> sign_up(),
    "store" => (new store) -> store(),
    // Form đăng ký, đăng nhập
    "form_dangnhap" => (new khachhangController) -> login(),
    "form_dangky" => (new khachhangController) -> sign_up(),
    // Chi tiết sản phẩm
    "chi_tiet" => (new sachController) -> chi_tiet(),
    default => view('404'),
};
