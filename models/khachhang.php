<?php
class khach_hang
{
    public $conn = null;
    public function __construct()
    {
        $this->conn = connection();
    }

    public function add_dki($khachhang)
    {
        $sql = "INSERT INTO khach_hang(name_kh, username, password, email, phone, address) VALUES
        (:name_kh, :username, :password, :email, :phone, :address)";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute($khachhang);
    }

    // Lấy ra 1 user
    public function find_one_user($id_kh)
    {
        $sql = "SELECT * FROM khach_hang WHERE id_kh=:id_kh";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute(['id_kh' => $id_kh]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    // Lấy ra 1 user theo email
    public function find_email_user($email)
    {
        $sql = "SELECT * FROM khach_hang WHERE email=:email";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute(['email' => $email]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    // Cập nhập user
    public function update($id_kh, $khachhang)
    {
        $sql = "UPDATE khach_hang SET name_kh=:name_kh, phone=:phone,
         address=:address, role=:role, active=:active WHERE id_kh=:id_kh";
        $stmt = $this->conn->prepare($sql);
        // Thêm id vào khachhang
        $khachhang['id_kh'] = $id_kh;
        $stmt->execute($khachhang);
    }
    
   
}
