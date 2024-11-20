<?php include_once "header.php" ?>

<main>
    <div class="banner">
        <div class="banner-left">
            <img src="img/banner1.webp" alt="">
        </div>
        <div class="banner-right">
            <div class="banner-right-top">
                <img src="img/banner2.webp" alt="">
            </div>
            <div class="banner-right-bottom">
                <img src="img/banner3.webp" alt="">
            </div>
        </div>
    </div>

    <div class="category">
        <h2>DANH MỤC SẢN PHẨM</h2>
        <hr>

        <ul>
            <?php foreach ($danhmuc as $danhmuc) : ?>
                <div class="img-danhmuc">
                    <img src="img/<?= $danhmuc['img_dm'] ?>" alt="">
                    <li><a href="#"><?= $danhmuc['name_dm'] ?></a></li>
                </div>
            <?php endforeach ?>
        </ul>

    </div>


    <article>
        <h2>SẢN PHẨM</h2>
        <hr>
        <div class="books">
            <div class="book">
                <a href="index.php?ctl=chi_tiet">
                    <img src="img/tieuthuyet.webp" alt="">
                    <h4>Tâm Lý Học Tội Phạm - Phác Họa Chân Dung Kẻ Phạm Tội</h4>
                    <p>40.000đ</p>
                    <p>-20%</p>
                    <p><del>50.000đ</del></p>
                </a>
            </div>

            <div class="book">
                <img src="img/tieuthuyet.webp" alt="">
                <h4>Tâm Lý Học Tội Phạm - Phác Họa Chân Dung Kẻ Phạm Tội</h4>
                <p>40.000đ</p>
                <p>-20%</p>
                <p><del>50.000đ</del></p>
            </div>

            <div class="book">
                <img src="img/tieuthuyet.webp" alt="">
                <h4>Tâm Lý Học Tội Phạm - Phác Họa Chân Dung Kẻ Phạm Tội</h4>
                <p>40.000đ</p>
                <p>-20%</p>
                <p><del>50.000đ</del></p>
            </div>

            <div class="book">
                <img src="img/tieuthuyet.webp" alt="">
                <h4>Tâm Lý Học Tội Phạm - Phác Họa Chân Dung Kẻ Phạm Tội</h4>
                <p>40.000đ</p>
                <p>-20%</p>
                <p><del>50.000đ</del></p>
            </div>

            <div class="book">
                <img src="img/tieuthuyet.webp" alt="">
                <h4>Tâm Lý Học Tội Phạm - Phác Họa Chân Dung Kẻ Phạm Tội</h4>
                <p>40.000đ</p>
                <p>-20%</p>
                <p><del>50.000đ</del></p>
            </div>

            <div class="book">
                <img src="img/tieuthuyet.webp" alt="">
                <h4>Tâm Lý Học Tội Phạm - Phác Họa Chân Dung Kẻ Phạm Tội</h4>
                <p>40.000đ</p>
                <p>-20%</p>
                <p><del>50.000đ</del></p>
            </div>

            <div class="book">
                <img src="img/tieuthuyet.webp" alt="">
                <h4>Tâm Lý Học Tội Phạm - Phác Họa Chân Dung Kẻ Phạm Tội</h4>
                <p>40.000đ</p>
                <p>-20%</p>
                <p><del>50.000đ</del></p>
            </div>

            <div class="book">
                <img src="img/tieuthuyet.webp" alt="">
                <h4>Tâm Lý Học Tội Phạm - Phác Họa Chân Dung Kẻ Phạm Tội</h4>
                <p>40.000đ</p>
                <p>-20%</p>
                <p><del>50.000đ</del></p>
            </div>

            <div class="book">
                <img src="img/tieuthuyet.webp" alt="">
                <h4>Tâm Lý Học Tội Phạm - Phác Họa Chân Dung Kẻ Phạm Tội</h4>
                <p>40.000đ</p>
                <p>-20%</p>
                <p><del>50.000đ</del></p>
            </div>

            <div class="book">
                <img src="img/tieuthuyet.webp" alt="">
                <h4>Tâm Lý Học Tội Phạm - Phác Họa Chân Dung Kẻ Phạm Tội</h4>
                <p>40.000đ</p>
                <p>-20%</p>
                <p><del>50.000đ</del></p>
            </div>
        </div>


    </article>

    <div class="top-products">
        <h2>TOP SẢN PHẨM YÊU THÍCH</h2>
        <hr>
        <div class="top-products-wrapper">
            <!-- Bên trái: Thứ tự, hình ảnh và tên sách -->
            <div class="top-products-left">
                <div class="top-product-item">
                    <div class="rank">1</div>
                    <img src="img/tieuthuyet.webp">
                    <h4>Tâm Lý Học Tội Phạm - Phác Họa Chân Dung Kẻ Phạm Tội</h4>
                </div>
                <div class="top-product-item">
                    <div class="rank">2</div>
                    <img src="img/tieuthuyet.webp">
                    <h4>Tâm Lý Học Tội Phạm - Phác Họa Chân Dung Kẻ Phạm Tội</h4>
                </div>
                <div class="top-product-item">
                    <div class="rank">3</div>
                    <img src="img/tieuthuyet.webp">
                    <h4>Tâm Lý Học Tội Phạm - Phác Họa Chân Dung Kẻ Phạm Tội</h4>
                </div>
                <div class="top-product-item">
                    <div class="rank">4</div>
                    <img src="img/tieuthuyet.webp">
                    <h4>Tâm Lý Học Tội Phạm - Phác Họa Chân Dung Kẻ Phạm Tội</h4>
                </div>
                <div class="top-product-item">
                    <div class="rank">5</div>
                    <img src="img/tieuthuyet.webp">
                    <h4>Tâm Lý Học Tội Phạm - Phác Họa Chân Dung Kẻ Phạm Tội</h4>
                </div>
            </div>

            <!-- Bên phải: Chi tiết sách -->
            <div class="top-products-right">
                <div class="top-product-detail">
                    <img src="img/tieuthuyet.webp" alt="Book 1">
                    <div class="book-info">
                        <h3>Tâm Lý Học Tội Phạm - Phác Họa Chân Dung Kẻ Phạm Tội</h3>
                        <p>Tác giả: <strong>Phạm Gia Bảo</strong></p>
                        <p>Nhà xuất bản: <strong>Kim Đồng</strong> </p>
                        <p>30.000đ</p>
                        <p>-20%</p>
                        <p><del>50.000đ</del></p>
                        <p>“Người dọn dẹp hiện trường án mạng” - Góc khuất đằng sau nghề dọn dẹp hiện trường vụ án:
                            đầy tính nhân văn nhưng cũng
                            hết sức thảm khốc.

                            Nhiệm vụ của những nhân viên dọn dẹp hiện trường là làm sạch và khôi phục trạng thái của
                            nơi xảy ra vụ án lại như ban
                            đầu. Để hoàn thành việc dọn dẹp hiện trường, người trong nghề phải trải qua một khóa
                            huấn luyện. Họ được cung cấp những
                            kiến thức về cách xử lý hiện trường khi xảy ra các vụ gi…ết người, t…ự t…ử hay t…ai
                            n…ạn... Họ luôn phải giữ cho tinh
                            thần ổn định, sự can đảm, khả năng phục hồi khi bị "chấn thương" tâm lý bất chấp nơi cần
                            xử lý sẽ phải kinh khủng đến
                            mức nào. Hiển nhiên đây không phải công việc dành cho người "yếu tim".</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<?php include_once "footer.php" ?>