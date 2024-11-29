<?php

class BL_admin {
    public $conn = null;

    // Constructor để kết nối cơ sở dữ liệu
    public function __construct() {
        // Gọi hàm kết nối cơ sở dữ liệu
        $this->conn = connection();
    }

    //  lấy tất cả bình luận
    public function allBL() {
        try {
            $sql = "SELECT * FROM danh_gia";
            $stmt = $this->conn->prepare($sql);
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            // Xử lý lỗi nếu không thể truy vấn dữ liệu
            return [];
        }
    }

    // thêm bình luận vào cơ sở dữ liệu
    public function addComment($id_sp, $id_kh, $rating, $comment) {
        try {
            $sql = "INSERT INTO danh_gia (id_sp, id_kh, rating, comment, created_at_review) 
                    VALUES (:id_sp, :id_kh, :rating, :comment, NOW())";
            $stmt = $this->conn->prepare($sql);
            $stmt->bindParam(':id_sp', $id_sp);
            $stmt->bindParam(':id_kh', $id_kh);
            $stmt->bindParam(':rating', $rating);
            $stmt->bindParam(':comment', $comment);
            $stmt->execute();
        } catch (PDOException $e) {
            // Xử lý lỗi khi thêm bình luận
            echo "Lỗi khi thêm bình luận: " . $e->getMessage();
        }
    }

    //  xóa bình luận
    public function deleteComment($review_id) {
        try {
            $sql = "DELETE FROM danh_gia WHERE review_id = :review_id";
            $stmt = $this->conn->prepare($sql);
            $stmt->bindParam(':review_id', $review_id);
            $stmt->execute();
        } catch (PDOException $e) {
            // Xử lý lỗi khi xóa bình luận
            echo "Lỗi khi xóa bình luận: " . $e->getMessage();
        }
    }
}
?>
