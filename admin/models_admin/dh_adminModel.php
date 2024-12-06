<?php


class dh_adminModel
{
    public $conn = null;
    public function __construct()
    {
        $this->conn = connection();
    }

    public
        $status_details = [
            1 => 'Chờ xử lý',
            2 => 'Đang xử lý',
            3 => 'Hoàn  thành',
            4 => 'Đã hủy'
        ];


    // Lấy dữ liệu đơn hàng để hiển thị admin
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

    // Chi tiết hóa đơn
    public function find_dh($id_dh)
    {
        $sql = "SELECT o.*, name_kh, email, address, phone FROM
         don_hang o JOIN khach_hang u ON o.id_kh = u.id_kh 
        WHERE o.id_dh=:id_dh";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute(['id_dh' => $id_dh]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    // Danh sách sản phẩm của đơn hàng $id_dh
    public function listOrderDetail($id_dh)
    {
        $sql = "SELECT od.*, name_sp
        FROM chi_tiet_don_hang od
        JOIN san_pham p ON od.id_sp = p.id_sp
        WHERE od.id_dh = :id_dh";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute(['id_dh' => $id_dh]);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    // Cập nhập trạng thái
    public function updateStatus($id_dh, $status)
    {
        $sql = "UPDATE don_hang SET status=:status WHERE id_dh=:id_dh";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute(['id_dh' => $id_dh, 'status' => $status]);
    }
}
