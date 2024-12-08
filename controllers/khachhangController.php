<?php
class khachhangController
{
    public function login()
    {
        // Kiểm tra xem người dùng đăng nhập chưa
        // if (isset($_SESSION['khachhang'])) {
        //     header("Location: index.php");
        //     die;
        // }

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

                    if ($khachhang['role'] == 0) {
                        return  header('Location: index.php');
                    } else {
                        return  header('Location: admin/index.php');
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
            $email = $khachhang['email'];

            // Kiểm tra xem email đã tồn tại chưa
            if ((new khach_hang)->find_email_user($email)) {
                $_SESSION['error'] = 'Email này đã được sử dụng. Vui lòng sử dụng email khác.';
                header("Location: index.php?ctl=form_dangky"); // Quay lại form đăng ký
                die;
            }

            // Nếu email chưa tồn tại, thêm người dùng mới
            (new khach_hang)->add_dki($khachhang);
            $_SESSION['message'] = 'Đăng ký thành công';
            header("Location: index.php?ctl=form_dangnhap"); // Chuyển hướng đến form đăng nhập
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

    public function update_user()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $khachhang = $_POST;

            $khachhang['id_kh'] = $_SESSION['khachhang']['id_kh'];
            (new khach_hang)->update($khachhang);

            $updatedUser = array_merge($_SESSION['khachhang'], $khachhang);
            $_SESSION['khachhang'] = $updatedUser;

            header("Location: index.php");
            exit();
        } else {
            $id_kh = $_SESSION['khachhang']['id_kh'];
            $khachhang = (new khach_hang)->find_one($id_kh);

            // Hiển thị form cập nhật tài khoản
            view("chinhsua_canhan", ['khachhang' => $khachhang]);
        }
    }
}
