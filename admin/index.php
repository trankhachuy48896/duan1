<!-- trang admin -->
<?php
session_start();
require_once "../commons/env.php";
require_once "../commons/functions.php";

require_once "models_admin/dm_adminModel.php";
require_once "models_admin/sach_adminModel.php";
require_once "models_admin/nxb_adminModel.php";
require_once "models_admin/tg_adminModel.php";
require_once "models_admin/kh_adminModel.php";
require_once "models_admin/dh_adminModel.php";

require_once "controllers_admin/adminController.php";
require_once "controllers_admin/dm_adminController.php";
require_once "controllers_admin/sach_adminController.php";
require_once "controllers_admin/tk_adminController.php";
require_once "controllers_admin/bl_adminController.php";
require_once "controllers_admin/tg_adminController.php";
require_once "controllers_admin/nxb_adminController.php";
require_once "controllers_admin/dh_adminController.php";
require_once "controllers_admin/thongke_adminController.php";






$ctl = $_GET['ctl'] ?? "";

match ($ctl) {
    // Trang chủ admin 
    "" => (new adminController)->index_admin(),
    // Danh mục
    "form_add_dm" => (new dm_adminController)->form_add_dm(),
    "add_dm" => (new dm_adminController)->add_dm(),
    "edit_dm" => (new dm_adminController)->edit_dm(),
    "delete_dm" => (new dm_adminController)->delete_dm(),
    // Sách
    "list_sach" => (new sach_adminController)->list_Sach(),
    "form_add_sach" => (new sach_adminController)->form_add_sach(),
    "add_sach" => (new sach_adminController)->add_sach(),
    "edit_sach" => (new sach_adminController)->edit_sach(),
    "delete_sach" => (new sach_adminController)->delete_sach(),
    // Tài khoản
    "list_tk" => (new tk_adminController)->list_tk(),
    "form_add_tk" => (new tk_adminController)->form_add_tk(),
    "add_kh" => (new tk_adminController) -> add_tk(),
    "edit_tk" => (new tk_adminController)->edit_tk(),
    "delete_tk" => (new tk_adminController) -> delete_tk(),
    // Bình luận
    "list_bl" => (new bl_adminController)->list_bl(),
    // Tác giả
    "list_tg" => (new tg_adminController)->list_tg(),
    "form_add_tg" => (new tg_adminController)->form_add_tg(),
    "edit_tg" => (new tg_adminController)->edit_tg(),
    "add_tg" => (new tg_adminController)->add_tg(),
    "delete_tg" => (new tg_adminController)->delete_tg(),
    // Nhà xuất bản
    "list_nxb" => (new nxb_adminController)->list_nxb(),
    "form_add_nxb" => (new nxb_adminController)->form_add_nxb(),
    "add_nxb" => (new nxb_adminController)->add_nxb(),
    "edit_nxb" => (new nxb_adminController)->edit_nxb(),
    "delete_nxb" => (new nxb_adminController)->delete_nxb(),
    // Đơn hàng
    "list_dh" => (new dh_adminController)->list_dh(),

    "update_dh" => (new dh_adminController) -> update_dh(),

    // Thống kê
    "list_thongke" => (new thongke_adminController) -> list_thongke(),
    // Logout
    "logout" => (new adminController) -> logout(),

};
