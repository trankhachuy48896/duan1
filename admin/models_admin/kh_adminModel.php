<?php

class kh_adminModel
{
    public $conn = null;
    public function __construct()
    {
        $this->conn = connection();
    }

    // Lấy ra toàn bộ dữ liệu tài khoản
    public function all_kh()
    {
        $sql = "SELECT * FROM khach_hang ORDER BY id_kh DESC";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    // Thêm tài khoản
    public function add_kh($user)
    {
        $sql = "INSERT INTO khach_hang(name_kh, password, email, phone, address, role, active) VALUES (:name_kh, :password, :email, :phone, :address, :role, :active)";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute($user);
    }

    // Sửa tài khoản
    public function update_kh($user)
    {
        $sql = "UPDATE khach_hang SET active=:active WHERE id_kh=:id_kh";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute($user);
    }

    // Xóa tài khoản
    public function delete_kh($id_kh)
    {
        $sql = "DELETE FROM khach_hang WHERE id_kh=$id_kh";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
    }
    
    public function find_one_kh($id_kh)
    {
        $sql = "SELECT * FROM khach_hang WHERE id_kh=$id_kh";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
}
