<!-- commons/functions.php -->
<?php

function connection()
{
    try {
        $hostname = HOSTNAME;
        $username = USERNAME;
        $password = PASSWORD;
        $dbname = DBNAME;
        $port = PORT;

        $conn = new PDO("mysql:host=$hostname; dbname=$dbname; port=$port; charset=utf8", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $conn;
    } catch (PDOException $e) {
        echo "Lỗi kết nối đến CSDL: " . $e->getMessage();
    }
}

// Render view client
function view($view, $data = [])
{
    extract($data);
    include_once "views/$view.php";
}

// Render view admin
function view_admin($view, $data = [])
{
    extract($data);
    include_once "../admin/views_admin/$view.php";
}

// Chuyển đổi trạng thái đơn hàng
function getOrderStatus($status) {
    $status_details = [
        1 => 'Chờ xử lý',
        2 => 'Đang xử lý',
        3 => 'Hoàn  thành',
        4 => 'Đã hủy'
    ];
    return $status_details[$status];
}
?>
