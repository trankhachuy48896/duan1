<?php
include "header.php";
?>
<div class="form">
    <div class="form_login">
        <h2>Đăng Ký</h2>
        <form action="index.php?ctl=add_dki" method="post" enctype="multipart/form-data" id="register_form">
            Họ tên:
            <input type="text" name="name_kh" id="name_register" placeholder="Nhập họ tên">

            Địa chỉ email:
            <input type="email" name="email" id="email_register" placeholder="Nhập email">

            Mật khẩu:
            <input type="password" name="password" id="password_register" placeholder="Nhập mật khẩu">

            Số điện thoại:
            <input type="text" name="phone" id="phoneNumer_register" placeholder="Nhập số điện thoại">

            Địa chỉ:
            <input type="text" name="address" id="address_register" placeholder="Nhập địa chỉ">
            <br>

            <span id="error-message" style="color: red;"></span>

            <button type="submit">Đăng ký</button>


        </form>
    </div>

</div>
<script src="javaScript/javaRegister.js"></script>
<?php
include "footer.php";
?>