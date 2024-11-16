<<<<<<< HEAD
=======
<!-- Trang client -->

>>>>>>> 285ad268ba15bfabc44d2ef7c4c4c425a48490d7
<?php

require_once "commons/env.php";
require_once "commons/functions.php";
require_once "controllers/homeController.php";
require_once "controllers/khachhangController.php";
<<<<<<< HEAD
require_once "controllers/storeController.php";
=======
require_once "controllers/sachController.php";
>>>>>>> 285ad268ba15bfabc44d2ef7c4c4c425a48490d7



$ctl = $_GET['ctl'] ?? "";

match ($ctl) {
    "" => (new homeController) -> index(),
<<<<<<< HEAD
    "form_dangnhap" => (new khachhangController) -> login(),
    "form_dangky" => (new khachhangController) -> sign_up(),
    "store" => (new store) -> store(),
=======
    // Form đăng ký, đăng nhập
    "form_dangnhap" => (new khachhangController) -> login(),
    "form_dangky" => (new khachhangController) -> sign_up(),
    // Chi tiết sản phẩm
    "chi_tiet" => (new sachController) -> chi_tiet(),
>>>>>>> 285ad268ba15bfabc44d2ef7c4c4c425a48490d7
    default => view('404'),
};
