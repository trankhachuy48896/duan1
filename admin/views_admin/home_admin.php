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
                    <th>Trạng thái</th>
                    <th>
                        <a href="index.php?ctl=form_add_dm">Thêm</a>
                    </th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($categories as $category) : ?>
                    <tr>
                        <td><?= $category['id_dm'] ?></td>
                        <td><?= $category['name_dm'] ?></td>
                        <td><img src="<?= $category['img_dm'] ?>" alt=""></td>
                        <td>
                            <?php
                            if ($category['status_dm'] == 0) {
                                echo 'Đang kinh doanh';
                            } else {
                                echo 'Ngừng kinh doanh';
                            }
                            ?>
                        </td>
                        <td>
                            <a href="index.php?ctl=edit_dm&id_dm=<?= $category['id_dm'] ?>">Sửa</a>
                            <a onclick="return confirm('Bạn có chắc chắn muốn xóa?')" href="index.php?ctl=delete_dm&id_dm=<?= $category['id_dm'] ?>">Xóa</a>
                        </td>
                    </tr>
                <?php endforeach ?>
                <!-- Thêm các hàng khác ở đây -->
            </tbody>
        </table>
    </section>
</main>
</div>

<?php include_once "footer_admin.php" ?>