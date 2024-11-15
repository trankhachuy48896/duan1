<?php

class nxb_adminController
{
    public function list_nxb()
    {
        view_admin("nhaxuatban/list_nxb");
    }

    public function form_add_nxb()
    {
        view_admin("nhaxuatban/add_nxb");
    }

    public function edit_nxb()
    {
        view_admin("nhaxuatban/edit_nxb");
    }
}
