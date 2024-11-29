<?php
 
require_once __DIR__ . '/../models_admin/bl_admin.php'; // Đảm bảo đường dẫn đúng

class bl_adminController {
    public function list_bl() {
        // Kiểm tra xem form đã được gửi chưa
        if (isset($_POST['submit_comment'])) {
            // Lấy dữ liệu từ form
            $id_st = $_POST['id_st'];  
            $id_kh = $_POST['id_kh'];  
            $rating = $_POST['rating'];  
            $comment = $_POST['comment'];  

            // Kiểm tra và validate dữ liệu
            if ($this->validateInput($id_st, $id_kh, $rating, $comment)) {
                // Tạo đối tượng model BL_admin để lưu bình luận
                $binhluan = new BL_admin();
                $binhluan->addComment($id_st, $id_kh, $rating, $comment);

                // Chuyển hướng về trang danh sách bình luận sau khi thêm thành công
                header("Location: index.php?controller=bl_admin&action=list_bl");
                exit();
            } else {
                echo "Dữ liệu không hợp lệ!";
            }
        }

        // Lấy tất cả bình luận và gửi dữ liệu tới view
        $binhluan = (new BL_admin)->allBL();
        view_admin("binhluan/list_bl", ['binhluan' => $binhluan]);
    }

    // Hàm validate dữ liệu
    private function validateInput($id_st, $id_kh, $rating, $comment) {
        // Kiểm tra các giá trị có hợp lệ không
        return is_numeric($id_st) && is_numeric($id_kh) && $rating >= 1 && $rating <= 5 && !empty($comment);
    }
}
?> 
