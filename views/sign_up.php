<?php
include "header.php";
?>
<div class="form">
    <div class="form_login">
        <h2>Đăng Ký</h2>
        <form action="index.php?ctl=add_dki" method="post" enctype="multipart/form-data">
            Họ tên:
            <input type="text" name="name_kh" id="" placeholder="Nhập họ tên" required>

            Địa chỉ email:
            <input type="email" name="email" id="" placeholder="Nhập email" required>

            Mật khẩu:
            <input type="password" name="password" id="" placeholder="Nhập mật khẩu" required>

            Số điện thoại:
            <input type="text" name="phone" id="" placeholder="Nhập số điện thoại" required>

            Địa chỉ:
            <input type="text" name="address" id="" placeholder="Nhập địa chỉ" required>

            <button type="submit">Đăng kí</button>
        </form>
    </div>

</div>

<?php
include "footer.php";
?>