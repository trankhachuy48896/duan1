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
                    <th>Lượt xem</th>
                    <th>Danh mục</th>
                    <th>Nhà xuất bản</th>
                    <th>Trạng thái</th>

                    <th>
                        <a href="index.php?ctl=form_add_sach">Thêm</a>
                    </th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($products as $product) : ?>
                    <tr>
                        <td><?= $product['id_sp'] ?></td>
                        <td><?= $product['name_sp'] ?></td>
                        <td><?= $product['price_sp'] ?>đ</td>
                        <td><?= $product['quantity_sp'] ?></td>
                        <td><?= $product['describe_sp'] ?></td>
                        <td><img src="<?= $product['img_sp'] ?>" alt=""></td>
                        <td><?= $product['views_sp'] ?></td>
                        <td><?= $product['name_dm'] ?></td>
                        <td><?= $product['name_nxb'] ?></td>
                        <td>
                            <?php
                            if ($product['status_sp'] == 0) {
                                echo 'Đang kinh doanh';
                            } else {
                                echo 'Ngừng kinh doanh';
                            }
                            ?>
                        </td>
                        <td>
                            <a href="index.php?ctl=edit_sach&id_sp=<?= $product['id_sp'] ?>">Sửa</a>
                            <a onclick="return confirm('Bạn có chắc chắn muốn xóa?')" href="index.php?ctl=delete_sach&id_sp=<?= $product['id_sp'] ?>">Xóa</a>
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