<?php include_once "views_admin/header_admin.php" ?>
<!-- Main Content -->
<main class="content">
    <section class="table-section">
        <h2>Tài khoản</h2>
        <table class="data-table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Họ tên</th>
                    <th>Tên đăng nhập</th>
                    <th>Mật khẩu</th>
                    <th>Email</th>
                    <th>Số điện thoại</th>
                    <th>Địa chỉ</th>
                    <th>Vai trò</th>

                    <th>
                        <a href="index_admin.php?ctl=form_add_tk">Thêm</a>
                    </th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Phạm Gia Bảo</td>
                    <td>bao</td>
                    <td>123456</td>
                    <td>baopgph48888@gmail.com</td>
                    <td>0339032143</td>
                    <td>Vĩnh Phúc</td>
                    <td>Admin</td>
                    <td>
                        <a href="index_admin.php?ctl=edit_tk">Sửa</a>
                        <a href="#">Xóa</a>
                    </td>
                </tr>
                <!-- Thêm các hàng khác ở đây -->
            </tbody>
        </table>
    </section>
</main>
</div>

<?php include_once "views_admin/footer_admin.php" ?>