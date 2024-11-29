<?php include_once "header.php" ?>
<main>
    <form action="index.php?ctl=update_gh" method="POST">
        <div class="gio_hang">
            <h2>GIỎ HÀNG</h2>
            <hr>
            <div class="table_gio_hang">
                <table>
                    <thead>
                        <th>#ID</th>
                        <th>Sản phẩm</th>
                        <th>Giá</th>
                        <th>Số lượng</th>
                        <th>Tổng</th>
                    </thead>
                    <?php foreach ($carts as $id_sp => $cart) : ?>
                        <tr>
                            <td>
                                <?= $id_sp ?>
                            </td>
                            <td>
                                <img src="img/<?= $cart['img_sp'] ?>" alt="" width="100px">
                                <p><?= $cart['name_sp'] ?></p>
                            </td>
                            <td>
                                <?= number_format($cart['price_sp']) ?>đ
                            </td>
                            <td>
                                <input style="width: 60px" type="number" name="quantity_sp[<?= $id_sp ?>]" value="<?= $cart['quantity_sp']  ?>" min="1">
                            </td>
                            <td><?= number_format($cart['price_sp'] * $cart['quantity_sp']) ?>đ</td>
                            <td>
                                <a href="index.php?ctl=delete_gh&id_sp=<?= $id_sp ?>"><i class="fa-solid fa-x"></i></a>
                            </td>
                        </tr>
                    <?php endforeach ?>
                </table>
                <div class="cap_nhap">
                    <button type="submit">Cập nhập giỏ hàng</button>
                </div>
            </div>
        </div>

        <div class="thongtin_giohang">
            <div class="tongtien">
                <h3>TỔNG TIỀN</h3>
                <p class="item-info">
                    <span>Tổng:</span>
                    <span><?= number_format($sumPrice) ?>đ</span>
                </p>
                <a href="index.php?ctl=view_checkOut">Thanh toán</a>
            </div>
        </div>
    </form>
</main>

<?php include_once "footer.php" ?>