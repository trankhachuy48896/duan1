<?php
include "header.php";
?>
<div class="form">
    <div class="register">
        <h2>Đăng Ký</h2>
        <form action="index.php?ctl=add_dki" method="post" enctype="multipart/form-data" id="register_form">
            Họ tên:
            <input type="text" name="name_kh" id="name_register" placeholder="Nhập họ tên" >

            Địa chỉ email:
            <input type="email" name="email" id="email_register" placeholder="Nhập email" >

            Tên đăng nhập:
            <input type="text" name="username" id="username_register" placeholder="Nhập tên đăng nhập" >

            Mật khẩu:
            <input type="password" name="password" id="password_register" placeholder="Nhập mật khẩu" >

            Xác nhận mật khẩu:
            <input type="password" name="" id="verify_password" placeholder="Xác nhận mật khẩu" >

            Số điện thoại:
            <input type="text" name="phone" id="phoneNumer_register" placeholder="Nhập số điện thoại" >
            
            <button type="submit">Đăng nhập</button>

            Địa chỉ:
            <input type="text" name="address" id="address_register" placeholder="Nhập địa chỉ" >
            <br>

            <span id="error-message" style="color: red;"></span>
        </form>
    </div>

</div>
<script src="javaRegister.js"></script>
<?php
include "footer.php";
?>