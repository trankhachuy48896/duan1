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
                <a href="index.php?ctl=add_gh&id_sp=<?= $sach['id_sp'] ?>"><button class="them_gio_hang">THÊM VÀO GIỎ HÀNG</button></a>
                    <p><?= $sach['describe_sp'] ?></p>
            </div>
        </div>

    </article>

    <div class="danh_gia">
        <h2>ĐÁNH GIÁ SẢN PHẨM</h2>
        <hr>
        <?php if (isset($_SESSION['khachhang'])) : ?>
            <form action="">
                <input type="text" placeholder="Nhập nhận xét của bạn về sản phẩm">
                <button>Gửi nhận xét</button>
            </form>
        <?php else : ?>
            <div style="text-align: center; margin-top: 20px">
                <a href="index.php?ctl=form_dangnhap"
                    style="color: red; font-weight: bold; font-size: 18px">
                    Đăng nhập để bình luận
                </a>
            </div>

        <?php endif ?>
    </div>

</main>


<?php include_once "footer.php" ?>