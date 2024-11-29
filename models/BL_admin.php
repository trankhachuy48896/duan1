<?php
class BL_admin {
    public $conn;

    // Kết nối cơ sở dữ liệu
    public function __construct() {
        $this->conn = $this->connection(); // Kết nối thông qua phương thức connection()
    }
    // Thêm bình luận vào cơ sở dữ liệu
    public function addComment($id_sp, $id_kh, $rating, $comment) {
        try {
            $sql = "INSERT INTO danh_gia (id_sp, id_kh, rating, comment, created_at_review) 
                    VALUES (:id_sp, :id_kh, :rating, :comment, NOW())";
            $stmt = $this->conn->prepare($sql);

            // Liên kết tham số
            $stmt->bindParam(':id_sp', $id_sp);
            $stmt->bindParam(':id_kh', $id_kh);
            $stmt->bindParam(':rating', $rating);
            $stmt->bindParam(':comment', $comment);

            // Thực thi câu lệnh
            $stmt->execute();
        } catch (PDOException $e) {
            throw new Exception("Lỗi khi thêm bình luận: " . $e->getMessage());
        }
    }
}
?>
