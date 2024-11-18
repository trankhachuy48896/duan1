<?php

class adminController{
    public function index_admin() {
        $categories = (new dm_adminModel)->all_DM();
        view_admin("home_admin", ['categories' => $categories]);
    }
}