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
                    <button id="">-</button>
                    <input type="text" value="1" readonly>
                    <button id="">+</button>
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
    <form action="index.php?ctl=comment" method="POST">
    <!-- ID sản phẩm -->
    <input type="hidden" name="id_sp" value="<?= isset($sach['id_sp']) ? $sach['id_sp'] : ''; ?>">
    <!-- ID khách hàng -->
    <input type="hidden" name="id_kh" value="<?= isset($user['id_kh']) ? $user['id_kh'] : ''; ?>">
    
    <!-- Đánh giá -->
    <input type="number" name="rating" min="1" max="5" placeholder="Nhập đánh giá (1-5)" required>
    
    <!-- Nhận xét -->
    <textarea name="comment" placeholder="Nhập nhận xét của bạn về sản phẩm" required></textarea>
    
    <!-- Nút gửi -->
    <button type="submit" name="submit_comment">Gửi nhận xét</button>
</form>
</div>


</main>


<?php include_once "footer.php" ?>