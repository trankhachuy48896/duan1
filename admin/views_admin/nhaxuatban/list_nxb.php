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
                        <a href="index.php?ctl=form_add_nxb">Thêm</a>
                    </th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($publishers as $publisher) : ?>
                    <tr>
                        <td><?= $publisher['id_nxb'] ?></td>
                        <td><?= $publisher['name_nxb'] ?></td>
                        <td>
                            <a href="index.php?ctl=edit_nxb&id_nxb=<?= $publisher['id_nxb'] ?>">Sửa</a>
                            <a onclick="return confirm('Bạn có chắc chắn muốn xóa?')" href="index.php?ctl=delete_nxb&id_nxb=<?= $publisher['id_nxb'] ?>">Xóa</a>
                        </td>
                    </tr>
                <?php endforeach ?>
                <!-- Thêm các hàng khác ở đây -->
            </tbody>
        </table>
    </section>
</main>
</div>

<?php include_once "views_admin/footer_admin.php" ?>