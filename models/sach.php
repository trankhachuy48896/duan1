<?php

class sach
{
    public $conn = null;
    public function __construct()
    {
        $this->conn = connection();
    }

    public function sach_client()
    {
        $sql = "SELECT sp.*, dm.name_dm, nxb.name_nxb
        FROM san_pham sp
        JOIN danh_muc dm ON sp.id_dm = dm.id_dm
        JOIN nha_xuat_ban nxb ON sp.id_nxb = nxb.id_nxb
        WHERE sp.status_sp = 0
        ORDER BY sp.id_sp DESC
        LIMIT 15";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    // Lấy ra sản phẩm theo id (để hiện thị chi tiết sản phẩm)
    public function find_one($id_sp)
    {
        $sql = "SELECT sp.*, dm.name_dm, nxb.name_nxb
        FROM san_pham sp
        JOIN danh_muc dm ON sp.id_dm = dm.id_dm
        JOIN nha_xuat_ban nxb ON sp.id_nxb = nxb.id_nxb
        WHERE sp.status_sp = 0 AND id_sp=:id_sp";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute(['id_sp' => $id_sp]);
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        return $result;
    }

    // Lấy dữ liệu sách theo danh mục 
    public function sach_dm($id_dm)
    {
        $sql = "SELECT * FROM san_pham WHERE id_dm = $id_dm ORDER BY id_dm DESC";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }

    // Cập nhập lượt xem
    public function update_luotXem($id_sp)
    {
        $sql = "UPDATE san_pham SET views_sp = views_sp + 1 WHERE id_sp=$id_sp";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
    }
    
    // Lấy ra 5 sản phẩm yêu thích 
    public function top_sp()
    {
        $sql = "SELECT * FROM san_pham ORDER BY views_sp DESC LIMIT 5";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    // Lấy ra 5 sản phẩm mới nhất
    public function new_sp()
    {
        $sql = "SELECT * FROM san_pham ORDER BY id_sp DESC LIMIT 5";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

     public function search($keyword = null) {
        $sql = "SELECT * FROM san_pham WHERE name_sp LIKE '%$keyword%' ";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
