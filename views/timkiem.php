<?php
include_once "header.php"
?>
<article>
    <div class="books">
        <?php if($sach) : ?>
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
            <div>
                Không tìm thấy sản phẩm khớp với từ khóa!
            </div>
        <?php endif ?>
    </div>

</article>
<?php
include_once "footer.php"
?>