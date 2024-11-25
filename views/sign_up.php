<?php
include "header.php";
?>
<div class="form">
    <div class="form_login">
        <h2>Đăng Ký</h2>
        <form action="index.php?ctl=add_dki" method="post" enctype="multipart/form-data">
            Họ tên:
            <input type="text" name="name_kh" id="" placeholder="Nhập họ tên" require>

            Địa chỉ email:
            <input type="email" name="email" id="" placeholder="Nhập email" require>

            Tên đăng nhập:
            <input type="text" name="username" id="" placeholder="Nhập tên đăng nhập" require>

            Mật khẩu:
            <input type="password" name="password" id="" placeholder="Nhập mật khẩu" require>

            Xác nhận mật khẩu:
            <input type="password" name="" id="" placeholder="Xác nhận mật khẩu" require>

            Số điện thoại:
            <input type="text" name="phone" id="" placeholder="Nhập số điện thoại" require>

            Địa chỉ:
            <input type="text" name="address" id="" placeholder="Nhập địa chỉ" require>

            <button type="submit">Đăng nhập</button>
        </form>
    </div>

</div>

<?php
include "footer.php";
?>