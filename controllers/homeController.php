<?php

class homeController{
    public function index() {
        $danhmuc = (new danhmuc)->dm_client();
        $sach = (new sach) -> sach_client();
        $top_sp = (new sach) -> top_sp();
        $new_sp = (new sach) -> new_sp();
        view("home", ['danhmuc' => $danhmuc, 'sach' => $sach, 'top_sp' => $top_sp, 'new_sp' => $new_sp]);
    }
}