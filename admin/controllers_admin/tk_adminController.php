<?php
class tk_adminController {
    public function list_tk() {
        view_admin("taikhoan/list_tk");
    }
    public function form_add_tk() {
        view_admin("taikhoan/add_tk");
    }
    public function edit_tk() {
        view_admin("taikhoan/edit_tk");
    }
}