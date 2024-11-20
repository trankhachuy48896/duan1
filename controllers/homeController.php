<?php

class homeController{
    public function index() {
        $danhmuc = (new danhmuc)->dm_client();
        view("home", ['danhmuc' => $danhmuc]);
    }
}