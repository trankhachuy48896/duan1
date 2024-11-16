<?php include_once "views_admin/header_admin.php" ?>
<!-- Main Content -->
<main class="content">
    <section class="table-section">
        <h2>Sách</h2>
        <table class="data-table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Tên sách</th>
                    <th>Giá</th>
                    <th>Số lượng</th>
                    <th>Mô tả</th>
                    <th>Ảnh</th>
                    <th>Danh mục</th>
                    <th>Nhà xuất bản</th>

                    <th>
                        <a href="index.php?ctl=form_add_sach">Thêm</a>
                    </th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Đảo hải tặc</td>
                    <td>200.000đ</td>
                    <td>100</td>
                    <td>“Người dọn dẹp hiện trường án mạng”</td>
                    <td><img src="../img/tieuthuyet.webp" alt=""></td>
                    <td>Trinh thám</td>
                    <td>Kim Đồng</td>
                    <td>
                        <a href="index.php?ctl=edit_sach">Sửa</a>
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