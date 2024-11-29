<?php
class donhang
{

    public $conn = null;
    public function __construct()
    {
        $this->conn = connection();
    }

    public function all_dh()
    {
        $sql = "SELECT o.*, name_kh, email, address, phone 
            FROM don_hang o 
            JOIN khach_hang u ON o.id_kh = u.id_kh 
            ORDER BY o.id_kh DESC";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    // Chi tiết đơn hàng
    public function find_dh($id_dh)
    {
        $sql = "SELECT o.*, name_kh, email, address, phone, od.unit_price, od.quantity_dh, name_sp, img_sp FROM
         don_hang o JOIN khach_hang u ON o.id_kh = u.id_kh JOIN chi_tiet_don_hang od ON od.id_dh=o.id_dh
        JOIN san_pham p ON od.id_sp=p.id WHERE o.id_dh=:id_dh";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute(['id_dh' => $id_dh]);
    }

    // Thêm hóa đơn
    public function create_dh($data)
    {
        $sql = "INSERT INTO don_hang(id_kh, status, payment, total_amount) VALUES 
        (:id_kh, :status, :payment, :total_amount)";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute($data);
        return $this->conn->lastInsertId();
    }

    // Cập nhập trạng  thái
    public function updateStatus($id_dh, $status)
    {
        $sql = "UPDATE don_hang SET status=:status WHERE id_dh:=id_dh";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute(['id_dh' => $id_dh, 'status' => $status]);
    }

    // Thêm chi tiết đơn hàng
    public function createOrderDetail($data)
    {
        $sql = "INSERT INTO chi_tiet_don_hang(id_dh, id_sp, quantity_dh, unit_price) VALUES
        (:id_dh, :id_sp, :quantity_dh, :unit_price)";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute($data);
    }
}
