<?php

class sach_adminController{
    public function list_Sach() {
        view_admin("sach/list_sach");
    }

    public function form_add_sach() {
        view_admin("sach/add_sach");
    }

    public function edit_sach() {
        view_admin("sach/edit_sach");
    }
}