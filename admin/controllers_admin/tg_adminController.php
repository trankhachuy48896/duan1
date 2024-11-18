<?php

class tg_adminController{
    public function list_tg() {
        view_admin("tacgia/list_tg");
    }

    public function form_add_tg() {
        view_admin("tacgia/add_tg");
    }

    public function edit_tg() {
        view_admin("tacgia/edit_tg");
    }
}