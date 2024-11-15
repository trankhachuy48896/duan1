<?php include_once "views_admin/header_admin.php" ?>
<!-- Main Content -->
<main class="content">
    <section class="table-section">
        <h2>Tác giả</h2>
        <table class="data-table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Tên tác giả</th>
                    <th>
                        <a href="index_admin.php?ctl=form_add_tg">Thêm</a>
                    </th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Phạm Gia Bảo</td>
                    <td>
                        <a href="index_admin.php?ctl=edit_tg">Sửa</a>
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