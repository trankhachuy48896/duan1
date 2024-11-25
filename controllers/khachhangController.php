<?php
class khachhangController
{
    public function login()
    {
        // Kiểm tra xem người dùng đăng nhập chưa
        if (isset($_SESSION['khachhang'])) {
            header("Location: index.php");
            die;
        }

        $error = null;
        if ($_SERVER['REQUEST_METHOD'] === "POST") {
            $email = $_POST['email'];
            $password = $_POST['password'];
            $khachhang = (new khach_hang)->find_email_user($email);
            // var_dump($khachhang);
            // die;
            // Kiểm tra mật khẩu không mã hóa
            if ($khachhang) {
                if ($password === $khachhang['password']) { // So sánh trực tiếp
                    $_SESSION['khachhang'] = $khachhang;

                    if ($khachhang['role'] == '0') {
                        header('location: index.php');
                    } else {
                        header("Location: admin/index.php");
                    }
                    die;
                } else {
                    $error = "Email hoặc mật khẩu không đúng";
                }
            } else {
                $error = "Email hoặc mật khẩu không đúng";
            }
        }
        view("login", ['error' => $error]);
    }


    public function sign_up()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $khachhang = $_POST;
            (new khach_hang)->add_dki($khachhang);
            $_SESSION['message'] = 'Đăng ký thành công';
            header("Location: index.php?ctl=form_dangnhap");
            die;
        }
        view("sign_up");
    }

    // Đăng xuất
    public function logout()
    {
        session_start();
        session_destroy();
        header("Location: index.php");
        exit();
    }
}
