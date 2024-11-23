<?php
include "header.php";
?>
<div class="form">
    <div class="register">
        <h2>Đăng Ký</h2>
        <form action="" id="register_form" method="post">
            Họ tên:
            <input type="text" name="" id="name_register" placeholder="Nhập họ tên" require>

            Địa chỉ email:
            <input type="email" name="" id="email_register" placeholder="Nhập email" require>

            Tên đăng nhập:
            <input type="text" name="" id="username_register" placeholder="Nhập tên đăng nhập" require>

            Mật khẩu:
            <input type="password" name="" id="password_register" placeholder="Nhập mật khẩu" require>

            Xác nhận mật khẩu:
            <input type="password" name="" id="verify_password" placeholder="Xác nhận mật khẩu" require>

            Số điện thoại:
            <input type="text" name="" id="phoneNumer_register" placeholder="Nhập số điện thoại" require>
            
            <button type="submit">Đăng nhập</button>

            <br>
            <span id="error-message" style="color: red;"></span>
        </form>
    </div>

</div>
<script src="javaRegister.js"></script>
<?php
include "footer.php";
?>