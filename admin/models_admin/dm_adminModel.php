<?php

class dm_adminModel {
    public $conn = null;
    public function __construct()
    {
        $this->conn = connection();
    }
    
    // Lấy toàn bộ dữ liệu danh mục trong sql để hiển thị ra trang admin
    public function all_DM() {
        $sql = "SELECT * FROM danh_muc ORDER BY id_dm DESC";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    
    // Thêm danh mục 
    public function add_DM($categories) {
        $sql = "INSERT INTO danh_muc(name_dm, img_dm, status_dm) VALUES (:name_dm, :img_dm, :status_dm)";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute($categories);
    }

    // Sửa danh mục
    public function update_DM($categories) {
        $sql = "UPDATE danh_muc SET name_dm=:name_dm, img_dm=:img_dm, status_dm=:status_dm
        WHERE id_dm=:id_dm";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute($categories);
    }

    // Xóa danh mục
    public function delete_DM($id_dm) {
        $sql = "DELETE FROM danh_muc WHERE id_dm=$id_dm";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
    }

    // Lấy ra 1 sản phẩm theo danh mục
    public function find_one_DM($id_dm) {
        $sql = "SELECT * FROM danh_muc WHERE id_dm=$id_dm";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
}