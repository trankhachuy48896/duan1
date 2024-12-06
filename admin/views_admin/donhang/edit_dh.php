<?php include_once "views_admin/header_admin.php" ?>
<div class="form-add">
    <h2>Chi tiết đơn hàng</h2>
    <p>Mã đơn hàng: #<?= $order['id_dh'] ?></p>
    <p>Ngày đặt hàng: <?= date('d-m-Y H:i:s', strtotime($order['created_at_dh'])) ?></p>

    <h4>Thông tin khách hàng</h4>
    <p>Họ tên: <?= $order['name_kh'] ?></p>
    <p>Email: <?= $order['email'] ?></p>
    <p>Điện thoại: <?= $order['phone'] ?></p>
    <p>Địa chỉ: <?= $order['address'] ?></p>

    <h4>Danh sách sản phẩm</h4>
    <table border="1">
        <thead>
            <th>#</th>
            <th>Sản phẩm</th>
            <th>Số lượng</th>
            <th>Giá</th>
            <th>Thành tiền</th>
        </thead>
        <tbody>
            <?php foreach ($order_details as $stt => $detail) : ?>
                <tr>
                    <td><?= $stt + 1 ?></td>
                    <td><?= $detail['name_sp'] ?></td>
                    <td><?= number_format($detail['unit_price']) ?></td>
                    <td><?= $detail['quantity_dh'] ?></td>
                    <td><?= number_format($detail['unit_price'] * $detail['quantity_dh']) ?></td>
                </tr>
            <?php endforeach ?>

            <tr>
            <tr>
                <td colspan="4" class="text-right">Tổng cộng:</td>
                <td><?= number_format($order['total_amount']) ?>đ</td>
            </tr>
            </tr>

        </tbody>
    </table>

    <h4>Cập nhập trạng thái đơn hàng</h4>
    <p>Trạng thái đơn hàng</p>
    <form action="" method="POST">
        <select name="status" id="">
            <?php foreach ($status as $key => $sta) : ?>
                <option value="<?= $key ?>" <?= $order['status'] == $key ? 'selected' : '' ?>>
                    <?= $sta ?>
                </option>
            <?php endforeach ?>
        </select>

        <button type="submit">Cập nhập</button>
    </form>

</div>

<?php include_once "views_admin/footer_admin.php" ?>