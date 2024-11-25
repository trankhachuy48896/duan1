<?php
class sach_adminModel
{
    public $conn = null;
    public function __construct()
    {
        $this->conn = connection();
    }

    // Lấy ra dữ liệu sách để hiển thị trong trang admin
    public function all_sach()
    {
        $sql = "
        SELECT sp.*, dm.name_dm, nxb.name_nxb
        FROM san_pham sp
        JOIN danh_muc dm ON sp.id_dm = dm.id_dm
        JOIN nha_xuat_ban nxb ON sp.id_nxb = nxb.id_nxb
        ORDER BY sp.id_sp DESC";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    // Thêm sách
    public function add_sach($product)
    {
        $sql = "INSERT INTO san_pham(name_sp, img_sp, quantity_sp, describe_sp, price_sp, status_sp, id_dm, id_nxb)
         VALUES (:name_sp, :img_sp, :quantity_sp, :describe_sp, :price_sp, :status_sp, :id_dm, :id_nxb)";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute($product);
    }

    // Sửa sách
    public function update_sach($product)
    {
        $sql = "UPDATE san_pham SET name_sp=:name_sp, img_sp=:img_sp, quantity_sp=:quantity_sp, 
        describe_sp=:describe_sp, price_sp=:price_sp, status_sp=:status_sp, id_dm=:id_dm, id_nxb=:id_nxb
        WHERE id_sp=:id_sp";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute($product);
    }

    public function find_one_sp($id_sp)
    {
        $sql = "SELECT * FROM san_pham WHERE id_sp=$id_sp";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function delete_sach($id_sp)
    {
        $sql = "DELETE FROM san_pham WHERE id_sp=$id_sp";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
    }
}
