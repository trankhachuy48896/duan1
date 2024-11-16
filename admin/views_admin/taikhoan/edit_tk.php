<?php include_once "views_admin/header_admin.php" ?>
<div class="form-add">
    <h2>Thêm tài khoản</h2>
    <form action="" method="post" enctype="multipart/form-data">
        Họ tên: <input type="text" name="" id="" required>
        Tên đăng nhập: <input type="text" name="" id="" required>
        Mật khẩu: <input type="password" name="" id="" required>
        Email: <input type="email" name="" id="" required>
        Số điện thoại: <input type="text" name="" id="" required>
        Địa chỉ: <input type="text" name="" id="" required>
        Vai trò: <select name="" id="">
            <option value="">Khách hàng</option>
            <option value="">Admin</option>
        </select>
        <button type="submit">Cập nhập</button>
    </form>
</div>

<?php include_once "views_admin/footer_admin.php" ?>