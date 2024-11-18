
<!-- admin/Controllers_admin/dm_adminController -->
<?php

class dm_adminController {
    public function form_add_dm() {
        view_admin("danhmuc/add_danhmuc");
    }

    public function edit_dm() {
        view_admin("danhmuc/edit_danhmuc");
    }
}