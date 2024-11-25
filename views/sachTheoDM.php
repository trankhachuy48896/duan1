<?php include_once "header.php" ?>

<article>
    <h2>SẢN PHẨM</h2>
    <hr>
    <div class="books">
        <?php if (!empty($sach)) : ?>
            <?php foreach ($sach as $sach) : ?>
                <div class="book">
                    <a href="index.php?ctl=chi_tiet&id_sp=<?= $sach['id_sp'] ?>">
                        <img src="img/<?= $sach['img_sp'] ?>" alt="">
                        <h4><?= $sach['name_sp'] ?></h4>
                        <p><?= number_format($sach['price_sp'], 0, '', '.') ?>đ</p>
                        <p>-20%</p>
                        <p><del>50.000đ</del></p>
                    </a>
                </div>
            <?php endforeach ?>
        <?php else : ?>
            <p style="text-align: center; color: red;">Hiện không có sản phẩm nào trong danh mục này!</p>
        <?php endif ?>
    </div>

</article>

<?php include "footer.php" ?>