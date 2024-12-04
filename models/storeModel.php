<?php
class StoreModel {
    private $conn;

    public function __construct() {
        $this->conn = connection(); // Kết nối cơ sở dữ liệu
    }

    // Lọc sản phẩm theo giá và danh mục
    public function getProducts() {
        // Câu lệnh SQL cơ bản với tất cả các trường cần thiết
        $sql = "SELECT sp.*, nxb.name_nxb
                FROM san_pham sp
                JOIN nha_xuat_ban nxb ON sp.id_nxb = nxb.id_nxb
                WHERE 1"; 
        
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    // Lấy danh mục
    public function getCategories() {

        $sql = "SELECT id_dm, name_dm FROM danh_muc";

        $stmt = $this->conn->prepare($sql);

        $stmt->execute();
        
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getPublishers() {

        $sql = "SELECT id_nxb, name_nxb FROM nha_xuat_ban";

        $stmt = $this->conn->prepare($sql);

        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function filterProducts($price, $category, $publisher) {
        $sql = "SELECT sp.*, nxb.name_nxb
                FROM san_pham sp
                JOIN danh_muc dm ON sp.id_dm = dm.id_dm
                JOIN nha_xuat_ban nxb ON sp.id_nxb = nxb.id_nxb
                WHERE 1";
    
        $params = []; // Mảng chứa giá trị bind
    
        // Điều kiện lọc theo giá
        if ($price) {
            switch ($price) {
                case '1':
                    $sql .= " AND sp.price_sp BETWEEN 0 AND 150000";
                    break;
                case '2':
                    $sql .= " AND sp.price_sp BETWEEN 150000 AND 300000";
                    break;
                case '3':
                    $sql .= " AND sp.price_sp BETWEEN 300000 AND 500000";
                    break;
                case '4':
                    $sql .= " AND sp.price_sp BETWEEN 500000 AND 700000";
                    break;
                case '5':
                    $sql .= " AND sp.price_sp >= 700000";
                    break;
            }
        }
    
        // Điều kiện lọc theo danh mục
        if ($category) {
            $sql .= " AND sp.id_dm = :category";
            $params[':category'] = $category;
        }
    
        // Điều kiện lọc theo nhà xuất bản
        if ($publisher) {
            $sql .= " AND sp.id_nxb = :publisher";
            $params[':publisher'] = $publisher;
        }
    
        $stmt = $this->conn->prepare($sql);
    
        // Bind các tham số
        foreach ($params as $key => $value) {
            $stmt->bindValue($key, $value, PDO::PARAM_INT);
        }
    
        $stmt->execute();
    
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
        return $result ?: [];
    }
    

}
?>
