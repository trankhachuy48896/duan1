<?php
include "header.php";
?>

<main>
    <form action="index.php?ctl=check_out" method="POST" id="formDonHang">
        <div class="donhang">
            <div class="information">
                <div class="information-user">
                    <h2>Thông tin người nhận</h2>
                    <hr>
                    Họ tên: <input type="text" name="name_kh" placeholder="Nhập họ tên" value="<?= $user['name_kh']  ?>" >
                    Số điện thoại: <input type="text" name="phone" placeholder="Nhập số điện thoại" value="<?= $user['phone']  ?>" >
                    Email: <input type="email" name="email" placeholder="Nhập email" value="<?= $user['email']  ?>" >
                    Địa chỉ giao hàng: <input type="text" name="address" placeholder="Nhập địa chỉ giao hàng" value="<?= $user['address']  ?>" >
                    <input type="hidden" name="id_kh" value="<?= $user['id_kh'] ?>">
                    <span id="span_error" style="color: red;"></span>
                </div>

                <div class="information-cart">
                    <h2>Thông tin giỏ hàng</h2>
                    <hr>
                    <?php foreach ($carts as $cart) : ?>
                        <div class="information-products">
                            <div class="information-left">
                                <span><?= $cart['name_sp'] ?></span>
                                <p>Số lượng: <?= $cart['quantity_sp'] ?></p>
                            </div>
                            <div class="information-right">
                                <p><?= number_format($cart['price_sp'] * $cart['quantity_sp']) ?>đ</p>
                            </div>
                        </div>
                    <?php endforeach ?>
                    <div class="tongtien">
                        Tổng tiền: <span><?= number_format($sumPrice) ?>đ</span>
                    </div>
                </div>
            </div>


            <div class="information-pay">
                <h2>Phương thức thanh toán</h2>
                <hr>
                <input type="radio" name="payment" value="cod" checked>Thanh toán khi giao hàng(COD) <br> <br>
                <input type="radio" name="payment" value="vnpay">Thanh toán bằng VNPAY
            </div>

            <button type="submit">Xác nhận thanh toán</button>
        </div>
    </form>


</main>





<script src="javaScript/javaDonHang.js"></script>
<?php
include "footer.php";
?>