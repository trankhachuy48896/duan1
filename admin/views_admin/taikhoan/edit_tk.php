<?php include_once "views_admin/header_admin.php" ?>
<div class="form-add">
    <h2>Thêm tài khoản</h2>
    <form action="" method="post" enctype="multipart/form-data" id="edit_taiKhoan">
        Họ tên: <input type="text" name="" id="edit_taiKhoan_ten">
        Tên đăng nhập: <input type="text" name="" id="edit_taiKhoan_tenDangNhap">
        Mật khẩu: <input type="password" name="" id="edit_taiKhoan_matKhau">
        Email: <input type="email" name="" id="edit_taiKhoan_email">
        Số điện thoại: <input type="text" name="" id="edit_taiKhoan_soDienThoai">
        Địa chỉ: <input type="text" name="" id="edit_taiKhoan_diaChi">
        Vai trò: <select name="" id="edit_taiKhoan_vaiTro" value="0">
            <option value="0">Lựa chọn</option>
            <option value="1">Khách hàng</option>
            <option value="2">Admin</option>
        </select>
        <button type="submit">Cập nhập</button>
        <br>
        <span id="errorMessage" style="color: red;"></span>
    </form>
</div>
<script src="js-admin/js_edit_tk.js"></script>
<?php include_once "views_admin/footer_admin.php" ?>