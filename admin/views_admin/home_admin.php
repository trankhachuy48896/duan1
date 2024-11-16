
<!-- admin/views_admin/home_admin.php -->
<?php include_once "header_admin.php" ?>
<!-- Main Content -->
<main class="content">
    <section class="table-section">
        <h2>Danh mục</h2>
        <table class="data-table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Tên danh mục</th>
                    <th>Ảnh</th>
                    <th>
                        <a href="index.php?ctl=form_add_dm">Thêm</a>
                    </th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Trinh thám</td>
                    <td><img src="../img/tieuthuyet.webp" alt=""></td>
                    <td>
                        <a href="index.php?ctl=edit_dm">Sửa</a>
                        <a href="#">Xóa</a>
                    </td>
                </tr>
                <!-- Thêm các hàng khác ở đây -->
            </tbody>
        </table>
    </section>
</main>
</div>

<?php include_once "footer_admin.php" ?>