<?php

require_once "commons/env.php";
require_once "commons/functions.php";
require_once "controllers/homeController.php";
require_once "controllers/khachhangController.php";
require_once "controllers/binhluanController.php";
require_once "controllers/lienheController.php";
require_once "controllers/gioithieuController.php";






$ctl = $_GET['ctl'] ?? "";

match ($ctl) {
    "" => (new homeController) -> index(),
    "form_dangnhap" => (new khachhangController) -> login(),
    "form_dangky" => (new khachhangController) -> sign_up(),
    "baiviet" => (new binhluan) ->binhluan(),
    "lienhe" => ( new lienhe) ->lienhe(),
    "gioithieu" => ( new gioithieu) ->gioithieu(),

    default => view('404'),
};
