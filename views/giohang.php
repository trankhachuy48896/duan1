<?php include_once "header.php" ?>
<main>
    <div class="gio_hang">
        <h2>GIỎ HÀNG</h2>
        <hr>
        <div class="table_gio_hang">
            <table>
                <thead>
                    <th>Sản phẩm</th>
                    <th>Giá</th>
                    <th>Số lượng</th>
                    <th>Tổng</th>
                </thead>
                <tr>
                    <td>
                        <img src="img/tieuthuyet.webp" alt="">
                        <p>Tiểu thuyết trinh thám</p>
                    </td>
                    <td>
                        126,000đ
                    </td>
                    <td>
                        <button id="">-</button>
                        <input type="text" value="1" readonly>
                        <button id="">+</button>
                    </td>
                    <td>126,000đ</td>
                    <td>
                        <a href="#"><i class="fa-solid fa-x"></i></a>
                    </td>
                </tr>
            </table>

        </div>
    </div>

    <div class="thongtin_giohang">
        <div class="tongtien">
            <h3>TỔNG TIỀN</h3>
            <p class="item-info">
                <span>Số lượng:</span>
                <span>1 sản phẩm</span>
            </p>
            <p class="item-info">
                <span>Tổng:</span>
                <span>126,000đ</span>
            </p>
            <button>Thanh toán</button>
        </div>
    </div>
</main>

<?php include_once "footer.php" ?>