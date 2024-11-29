<?php include_once "views_admin/header_admin.php" ?>
<div class="form-add">
    <h2>Thêm tài khoản</h2>
    <form action="index.php?ctl=add_kh" method="post" enctype="multipart/form-data" id="add_taiKhoan">
        Họ tên: <input type="text" name="name_kh" id="add_taiKhoan_ten">
        Mật khẩu: <input type="password" name="password" id="add_taiKhoan_matKhau">
        Email: <input type="email" name="email" id="add_taiKhoan_email">
        Số điện thoại: <input type="text" name="phone" id="add_taiKhoan_soDienThoai">
        Địa chỉ: <input type="text" name="address" id="add_taiKhoan_diaChi">
        Vai trò: <select name="role" id="add_taiKhoan_vaiTro" value="0">
            <option value="0">Khách hàng</option>
            <option value="1">Quản trị</option>
        </select>
        Trạng thái: <br>
        <input type="radio" name="active" value="0" checked id=""> Đang hoạt động
        <input type="radio" name="active" value="1" id=""> Ngừng hoạt động <br><br>
        <button type="submit">Thêm</button>
        <br>
        <span id="errorMessage" style="color: red;"></span>
    </form>
</div>
<script src="js-admin/js_add_tk.js"></script>
<?php include_once "views_admin/footer_admin.php" ?>