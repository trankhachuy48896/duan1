<?php
class binhluanController {
    public function add_bl() {
        if (isset($_POST['submit_comment'])) {
            // In dữ liệu gửi từ form ra để kiểm tra
            // var_dump($_POST);
            // die(); // Dừng chương trình để kiểm tra
    
            // Tiến hành xử lý nếu dữ liệu hợp lệ
            if (isset($_POST['id_sp'], $_POST['id_kh'], $_POST['rating'], $_POST['comment'])) {
                $id_sp = $_POST['id_sp'];
                $id_kh = $_POST['id_kh'];
                $rating = $_POST['rating'];
                $comment = $_POST['comment'];
    
                if (!empty($id_sp) && !empty($id_kh) && !empty($rating) && !empty($comment) && is_numeric($id_kh)) {
                    $id_kh = (int) $id_kh;
    
                    // Gọi model để lưu bình luận
                    $binhluanModel = new BL_admin();
                    try {
                        $binhluanModel->addComment($id_sp, $id_kh, $rating, $comment);
                        echo "Cảm ơn bạn đã gửi bình luận!";
                    } catch (Exception $e) {
                        echo "Đã xảy ra lỗi khi thêm bình luận: " . $e->getMessage();
                    }
                } else {
                    echo "Vui lòng điền đầy đủ thông tin và đảm bảo dữ liệu hợp lệ!";
                }
            } else {
                echo "Thiếu thông tin cần thiết!";
            }
        }
    }
}
?>

