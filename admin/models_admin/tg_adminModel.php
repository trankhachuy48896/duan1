<?php

class tg_adminModel
{
    public $conn = null;
    public function __construct()
    {
        $this->conn = connection();
    }

    // Lấy ra toàn bộ dữ liệu tác giả
    public function all_tg()
    {
        $sql = "SELECT * FROM tac_gia ORDER BY id_tg DESC";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    // Thêm tác giả
    public function add_tg($author)
    {
        $sql = "INSERT INTO tac_gia(name_tg) VALUES (:name_tg)";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute($author);
    }

    // Sửa tác giả
    public function update_tg($author)
    {
        $sql = "UPDATE tac_gia SET name_tg=:name_tg WHERE id_tg=:id_tg";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute($author);
    }

    // Xóa tác giả
    public function delete_tg($id_tg)
    {
        $sql = "DELETE FROM tac_gia WHERE id_tg=$id_tg";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
    }

    public function find_one_tg($id_tg)
    {
        $sql = "SELECT * FROM tac_gia WHERE id_tg=$id_tg";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
}
