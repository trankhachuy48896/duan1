<?php include_once "header.php" ?>
<main>
    <article>
        <div class="chitiet">
            <div class="chitiet_left">
                <img src="img/<?= $sach['img_sp'] ?>" alt="">
            </div>
            <div class="chitiet_right">
                <h2><?= $sach['name_sp'] ?></h2>
                <p>Tác giả: <strong>Little Rainbow</strong></p>
                <p>Nhà xuất bản: <strong><?= $sach['name_nxb'] ?></strong> </p>
                <p><?= number_format($sach['price_sp'], 0, '', '.') ?>đ</p>
                <p>-20%</p>
                <p><del>50.000đ</del></p>
                <div class="soluong">
                    <label for="">Số lượng: </label>
                    <input type="number" value="1" min="1" >
                </div>
                <button class="mua_ngay">MUA NGAY</button>
                <button class="them_gio_hang">THÊM VÀO GIỎ HÀNG</button>
                <p><?= $sach['describe_sp'] ?></p>
            </div>
        </div>

    </article>

    <div class="danh_gia">
        <h2>ĐÁNH GIÁ SẢN PHẨM</h2>
        <hr>
        <form action="">
            <input type="text" placeholder="Nhập nhận xét của bạn về sản phẩm">
            <button>Gửi nhận xét</button>
        </form>
    </div>

</main>


<?php include_once "footer.php" ?>