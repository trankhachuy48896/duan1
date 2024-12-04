<?php include_once "views_admin/header_admin.php" ?>
<!-- Main Content -->
<main class="content">
    <section class="table-section">
        <h2>Đơn hàng</h2>
        <table class="data-table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Tên khách hàng</th>
                    <th>Số điện thoại</th>
                    <th>Phương thức thanh toán</th>
                    <th>Trạng thái</th>
                    <th>Tổng tiền</th>
                    <th>Ngày mua</th>
                    <th>
                        Chức năng
                    </th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($orders as $order) : ?>
                    <tr>
                        <td><?= $order['id_dh'] ?></td>
                        <td><?= $order['name_kh'] ?></td>
                        <td><?= $order['phone'] ?></td>
                        <td><?= $order['payment'] ?></td>
                        <td><?= getOrderStatus($order['status']) ?></td>
                        <td><?= number_format($order['total_amount']) ?>đ</td>
                        <td><?= $order['created_at_dh'] ?></td>
                        <td>
                            <a href="index.php?ctl=update_dh&id_dh=<?= $order['id_dh'] ?>">Cập nhập</a>
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