<?php 

class danhmuc{
    public $conn = null;
    public function __construct()
    {
        $this->conn=connection();
    }

    public function dm_client() {
        $sql = "SELECT * FROM danh_muc WHERE status_dm=0 LIMIT 8";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}