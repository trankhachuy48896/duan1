<?php include_once "views_admin/header_admin.php" ?>
<!-- Main Content -->
<main class="content">
    <section class="table-section">
        <h2>Nhà xuất bản</h2>
        <table class="data-table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Tên nhà xuất bản</th>
                    <th>
                        <a href="index_admin.php?ctl=form_add_nxb">Thêm</a>
                    </th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Kim Đồng</td>
                    <td>
                        <a href="index_admin.php?ctl=edit_nxb">Sửa</a>
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