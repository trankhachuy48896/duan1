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
                        <a href="index.php?ctl=form_add_tg">Thêm</a>
                    </th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($authors as $author) : ?>
                    <tr>
                        <td><?= $author['id_tg'] ?></td>
                        <td><?= $author['name_tg'] ?></td>
                        <td>
                            <a href="index.php?ctl=edit_tg&id_tg=<?= $author['id_tg'] ?>">Sửa</a>
                            <a onclick="return confirm('Bạn có chắc chắn muốn xóa?')" href="index.php?ctl=delete_tg&id_tg=<?= $author['id_tg'] ?>">Xóa</a>
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