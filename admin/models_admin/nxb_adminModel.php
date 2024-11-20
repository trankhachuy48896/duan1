<?php

class nxb_adminModel
{
    public $conn = null;
    public function __construct()
    {
        $this->conn = connection();
    }

    // Lấy ra toàn bộ dữ liệu nhà xuất bản
    public function all_nxb()
    {
        $sql = "SELECT * FROM nha_xuat_ban ORDER BY id_nxb DESC";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    // Thêm nhà xuất bản
    public function add_nxb($publisher)
    {
        $sql = "INSERT INTO nha_xuat_ban(name_nxb) VALUES (:name_nxb)";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute($publisher);
    }

    // Sửa nhà xuất bản
    public function update_nxb($publisher)
    {
        $sql = "UPDATE nha_xuat_ban SET name_nxb=:name_nxb WHERE id_nxb=:id_nxb";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute($publisher);
    }

    // Xóa nhà xuất bản
    public function delete_nxb($id_nxb)
    {
        $sql = "DELETE FROM nha_xuat_ban WHERE id_nxb=$id_nxb";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
    }

    public function find_one_nxb($id_nxb)
    {
        $sql = "SELECT * FROM nha_xuat_ban WHERE id_nxb=$id_nxb";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
}
