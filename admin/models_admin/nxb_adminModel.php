<?php 

class nxb_adminModel {
    public $conn = null;
    public function __construct()
    {
        $this->conn=connection();
    }

    public function all_nxb() {
        $sql = "SELECT * FROM nha_xuat_ban ORDER BY id_nxb DESC";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}