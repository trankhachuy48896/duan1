<?php
require_once "header.php";
?>

<link rel="stylesheet" href="css/store_css.css">

<div class="container">
    <form method="GET" action="http://localhost/duan1-main/index.php?ctl=store" id="filter_form">
        <div class="left">
            <div class="choose">
                <h3>Giá tiền</h3>
                <div class="input">
                    <input type="checkbox" name="price" value="1" <?= isset($_GET['price']) && $_GET['price'] == '1' ? 'checked' : '' ?>>
                    <label>0đ - 150.000đ</label>
                </div>
                <div class="input">
                    <input type="checkbox" name="price" value="2" <?= isset($_GET['price']) && $_GET['price'] == '2' ? 'checked' : '' ?>>
                    <label>150.000đ - 300.000đ</label>
                </div>
                <div class="input">
                    <input type="checkbox" name="price" value="3" <?= isset($_GET['price']) && $_GET['price'] == '3' ? 'checked' : '' ?>>
                    <label>300.000đ - 500.000đ</label>
                </div>
                <div class="input">
                    <input type="checkbox" name="price" value="4" <?= isset($_GET['price']) && $_GET['price'] == '4' ? 'checked' : '' ?>>
                    <label>500.000đ - 700.000đ</label>
                </div>
                <div class="input">
                    <input type="checkbox" name="price" value="5" <?= isset($_GET['price']) && $_GET['price'] == '5' ? 'checked' : '' ?>>
                    <label>700.000đ trở lên</label>
                </div>
            </div>

            <h3>Danh mục</h3>
            <?php foreach ($categories as $category) : ?>
                <div class="input">
                    <input type="checkbox" name="category" value="<?= $category['id_dm'] ?>" <?= isset($_GET['category']) && $_GET['category'] == $category['id_dm'] ? 'checked' : '' ?>>
                    <label><?= $category['name_dm'] ?></label>
                </div>
            <?php endforeach; ?>

            <h3>Nhà xuất bản</h3>
            <?php foreach ($publishers as $publisher) : ?>
                <div class="input">
                    <input type="checkbox" name="publisher" value="<?= $publisher['id_nxb'] ?>" <?= isset($_GET['publisher']) && $_GET['publisher'] == $publisher['id_nxb'] ? 'checked' : '' ?>>
                    <label><?= $publisher['name_nxb'] ?></label>
                </div>
            <?php endforeach; ?>
            <button type="submit" id="filter">Lọc</button>
        </div>
    </form>

    <div class="right">
        <h2 style="padding: 10px 20px">Tất cả sản phẩm</h2>
        <div class="products">
            <?php if (!empty($filterProducts)) : ?>
                <?php foreach ($filterProducts as $product) : ?>
                    <div class="product">
                        <a href="index.php?ctl=chi_tiet&id_sp=<?= $product['id_sp'] ?>">
                        <img src="img/<?= $product['img_sp'] ?>" alt="Sản phẩm">
                        <h4><?= $product['name_sp'] ?></h4>
                        <p><?= number_format($product['price_sp']) ?>đ</p>
                        <p><strong>Số lượng:</strong> <?= $product['quantity_sp'] ?></p>
                        <p><strong>Mô tả:</strong> <?= $product['describe_sp'] ?></p>
                        <p><strong>Nhà Xuất Bản:</strong> <?= $product['name_nxb'] ?></p>
                        <p><strong>Trạng thái:</strong> <?= $product['status_sp'] == 0 ? 'Còn hàng' : 'Hết hàng' ?></p>
                        <p><strong>Lượt xem:</strong> <?= $product['views_sp'] ?></p>
                        </a>
                    </div>
                <?php endforeach; ?>
            <?php else : ?>
                <p>Không tìm thấy sản phẩm.</p>
            <?php endif; ?>
        </div>
    </div>
</div>

<?php
include_once "footer.php";
?>

<script>
    // Lấy button và ô input
    const filter = document.getElementById('filter');
    const form = document.getElementById('filter_form');

    // Viết sự kiện submit cho nút lọc
    filter.addEventListener('click', function(event) {
        event.preventDefault(); // Ngừng hành động mặc định của form (chuyển hướng trang)

        // Lấy tất cả các giá trị lọc
        const formData = new FormData(form);
        const queryString = new URLSearchParams(formData).toString();
        
        // Tạo URL mới với các tham số lọc
        const newURL = "http://localhost/duan1-main/index.php?ctl=store&" + queryString;

        // Chuyển hướng tới URL mới mà không cần làm mới trang
        window.location.href = newURL;
    });


    const checkboxes = document.querySelectorAll('input[type="checkbox"][name="price"]');
        
        checkboxes.forEach(checkbox => {
            checkbox.addEventListener('click', function() {
                // Nếu checkbox này được chọn, bỏ chọn tất cả các checkbox khác
                if (this.checked) {
                    checkboxes.forEach(otherCheckbox => {
                        // Bỏ chọn các checkbox khác
                        if (otherCheckbox !== this) {
                            otherCheckbox.checked = false;
                        }
                    });
                }
            });
        });
        const categoryCheckboxes = document.querySelectorAll('input[type="checkbox"][name="category"]');

        // Lắng nghe sự kiện click của từng checkbox trong danh mục
        categoryCheckboxes.forEach(checkbox => {
            checkbox.addEventListener('click', function() {
                // Khi checkbox này được chọn, bỏ chọn tất cả các checkbox khác trong danh mục
                if (this.checked) {
                    categoryCheckboxes.forEach(otherCheckbox => {
                        if (otherCheckbox !== this) {
                            otherCheckbox.checked = false;
                        }
                    });
                }
            });
        });
        const publisherCheckboxes = document.querySelectorAll('input[type="checkbox"][name="publisher"]');

        // Lắng nghe sự kiện click của từng checkbox trong danh mục
        publisherCheckboxes.forEach(checkbox => {
            checkbox.addEventListener('click', function() {
                // Khi checkbox này được chọn, bỏ chọn tất cả các checkbox khác trong danh mục
                if (this.checked) {
                    publisherCheckboxes.forEach(otherCheckbox => {
                        if (otherCheckbox !== this) {
                            otherCheckbox.checked = false;
                        }
                    });
                }
            });
        });
</script>
