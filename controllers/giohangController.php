<?php

class giohangController
{
    public function gio_hang()
    {
        $carts = $_SESSION['cart'] ?? [];
        $sumPrice = (new giohangController) -> sumPrice();
        view("giohang", ['carts' => $carts, 'sumPrice' => $sumPrice]);
    }

    // Thêm sản phẩm vào giỏ hàng
    public function add_gh()
    {
        // Tạo 1 giỏ hàng
        $carts = $_SESSION['cart'] ?? [];
        // Lấy sản phẩm theo id để add vào giỏ
        $id_sp = $_GET['id_sp'];
        $product = (new sach)->find_one($id_sp);

        if (isset($carts[$id_sp])) {
            $carts[$id_sp]['quantity_sp'] += 1;
        } else {
            $carts[$id_sp] = [
                'name_sp' => $product['name_sp'],
                'img_sp' => $product['img_sp'],
                'price_sp' => $product['price_sp'],
                'quantity_sp' => 1
            ];
        }
        // Lưu giỏ hàng vào session
        $_SESSION['cart'] = $carts;
        // var_dump($carts);
        // die;

        $url = $_SESSION['URI'];
        header('Location: ' . $url);
    }

    // Tính tổng số lượng sản phẩm để hiển thị giỏ hàng
    public function totalSumQuantity() {
        $carts = $_SESSION['cart'] ?? [];
        $total = 0;
        foreach($carts as $cart){
            $total += $cart['quantity_sp']; 
        }
        return $total;
    }

    public function sumPrice() {
        $carts = $_SESSION['cart'] ?? [];
        $total = 0;
        foreach ($carts as $cart) {
            $total += $cart['quantity_sp'] * $cart['price_sp'];
        }
        return $total;
    }
    
    // Xóa sản phẩm trong giỏ hàng
    public function deleteProductInCart() {
        // Lấy id sp
        $id_sp = $_GET['id_sp'];
        // Hủy biến session chứa sản phẩm
        unset($_SESSION['cart'][$id_sp]);
        // Cập nhập lại số sản phẩm
        $_SESSION['totalQuantity'] = (new giohangController)->totalSumQuantity();
        // Chuyển hướng
        header("location: index.php?ctl=gio_hang");
    }

    // Cập nhập giỏ hàng
    public function updateCart() {
        $quantities = $_POST['quantity_sp'];
        // var_dump($quantities);
        // die;
        // Cập nhập số lượng
        foreach($quantities as $id_sp => $quantity) {
            $_SESSION['cart'][$id_sp]['quantity_sp'] = $quantity;
        }
        header("location: index.php?ctl=gio_hang");
    }
    
    // Hiển thị view thanh toán
    public function viewThanhToan() {
        // Kiểm tra xem người dùng đăng nhập chưa
        if(!isset($_SESSION['khachhang'])) {
            return header('location: index.php?ctl=login');
        }
        $user = $_SESSION['khachhang'];
        $carts = $_SESSION['cart'] ?? [];
        $sumPrice = (new giohangController)->sumPrice();
        view("donhang", ['user' => $user, 'carts' => $carts, 'sumPrice' => $sumPrice]);
    }


    // Thanh toán
    public function thanhToan() {
        // Lấy thong tin của người dùng
        $user = [
            'id_kh'=> $_POST['id_kh'],
            'name_kh' => $_POST['name_kh'],
            'phone' => $_POST['phone'],
            'address' => $_POST['address'],
            'role' => $_SESSION['khachhang']['role'],
            'active' => $_SESSION['khachhang']['active'],
        ];
        $sumPrice = (new giohangController)->sumPrice();
        // Lấy thông tin thanh toán
        $order = [
            'id_kh' => $_POST['id_kh'],
            'status' => 1,
            'payment' => $_POST['payment'],
            'total_amount' => $_POST['total_amount'],
           
        ];
         (new khach_hang) -> updateThanhToan($user['id_kh'], $user);
            $id_dh = (new donhang) -> create_dh($order);

            $carts = $_SESSION['cart'];
            foreach($carts as $id=> $cart) {
                $chiTietDonHang = [
                    'id_dh' => $id_dh,
                    'id_sp' => $id,
                    'unit_price' => $cart['unit_price'],
                    'quantity_dh' => $cart['quantity_dh']
                ];
                (new donhang) -> createOrderDetail($chiTietDonHang);
            } 
            $this->clear_gh(); // Xóa thông tin giỏ hàng
           return header("Location: index.php?ctl=success");
    }

    // Xóa giỏ hàng 
    public function clear_gh() {
        unset($_SESSION['cart']);
        unset($_SESSION['totalQuantity']);
        unset($_SESSION['URI']); 
    }

    public function success() {
        view('success');
    }


}
