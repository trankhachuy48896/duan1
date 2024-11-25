<?php
class khach_hang{
    public $conn = null;
    public function __construct()
    {
        $this->conn= connection();
    }

    public function add_dki($khachhang) {
        $sql = "INSERT INTO khach_hang(name_kh, username, password, email, phone, address) VALUES
        (:name_kh, :username, :password, :email, :phone, :address)";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute($khachhang);
    }
}

?>