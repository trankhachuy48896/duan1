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
        $sql = "INSERT INTO khach_hang(name_kh, password, email, phone, address) VALUES
        (:name_kh, :password, :email, :phone, :address)";
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

    // Cập nhập user trong chỉnh sửa cá nhân
    public function update($user)
    {
        $sql = "UPDATE khach_hang SET 
                name_kh = :name_kh,
                phone=:phone,
                address=:address 
                WHERE id_kh = :id_kh";


        $stmt = $this->conn->prepare($sql);

        // Xây dựng mảng dữ liệu để truyền vào execute
        $data = [
            'name_kh' => $user['name_kh'],
            'phone' => $user['phone'],
            'address' => $user['address'],
            'id_kh' => $user['id_kh']
        ];
        $stmt->execute($data);
    }

    // Lấy ra 1 bản ghi theo id
    public function find_one($id_kh)
    {
        $sql = "SELECT * FROM khach_hang WHERE id_kh = :id_kh";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute(['id_kh' => $id_kh]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    // Cập nhập thông tin user trong thanh toán
    public function updateThanhToan($id_kh, $data)
    {
        $sql = "UPDATE khach_hang SET name_kh=:name_kh, phone=:phone, address=:address, role=:role, active=:active
        WHERE id_kh=:id_kh";
        $stmt = $this->conn->prepare($sql);
        $data['id_kh'] = $id_kh;
        $stmt->execute($data);
    }

   
}
