
<!-- admin/Controllers_admin/dm_adminController -->
<?php

class dm_adminController {
    // Hiển thị form thêm danh mục
    public function form_add_dm() {
        view_admin("danhmuc/add_danhmuc");
    }
    
    // Xử lý thêm danh mục
    public function add_dm() {
        $categories = $_POST;
        // echo "<pre>";
        // var_dump($categories);
        $img_dm = "";
        $file_anh = $_FILES['img_dm'];
        if ($file_anh['size'] > 0) {
            $img_dm = "../img/" . basename($file_anh['name']);
            move_uploaded_file($file_anh['tmp_name'], $img_dm);
        }
        $categories['img_dm'] = $img_dm;
        $categories['status_dm'] = (int) $categories['status_dm'];
        (new dm_adminModel)->add_DM($categories);
        header("location: index.php");
        die;
    }

    // Xử lý cập nhập danh mục
    public function edit_dm() {
        if($_SERVER['REQUEST_METHOD'] == "POST") {
            $categories = $_POST;
            $file_anh = $_FILES['img_dm'];
            if ($file_anh['size'] > 0) {
                $img_dm = "../img/" . basename($file_anh['name']);
                move_uploaded_file($file_anh['tmp_name'], $img_dm);
            }else {
            // Nếu không chọn ảnh mới, giữ ảnh cũ
            $img_dm = $categories['img_dm'];
            }

            $categories['img_dm'] = $img_dm;
            (new dm_adminModel)->update_DM($categories);
            header("location: index.php");
            die;
        }
        $id_dm = $_GET['id_dm'];
        $categories = (new dm_adminModel) ->find_one_DM($id_dm);
        view_admin("danhmuc/edit_danhmuc", ['categories' => $categories]);
    }
    
    // Xóa danh mục
    public function delete_dm() {
        $id_dm = $_GET['id_dm'];
        (new dm_adminModel)-> delete_DM($id_dm);
        $_SESSION['message'] = "Xóa dữ liệu thành công";
        header("location: index.php");
        die;

    }
}