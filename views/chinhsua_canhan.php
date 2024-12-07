<?php include_once "header.php" ?>
<div class="form">
    <div class="form_login">
        <?php if (isset($_SESSION['khachhang'])) : ?>
            <h2>Cập nhập thông tin</h2>
            <form action="index.php?ctl=update_user&id_kh=<?= $khachhang['id_kh'] ?>" method="post" enctype="multipart/form-data" id="edit_danhMuc">
                <!-- Điền giá trị hiện tại của người dùng -->
                Họ tên: <input type="text" name="name_kh" value="<?= $khachhang['name_kh'] ?>" required><br>
                Số điện thoại: <input type="text" name="phone" value="<?= $khachhang['phone'] ?>" required><br>
                Địa chỉ: <input type="text" name="address" value="<?= $khachhang['address'] ?>" required><br>
                <button type="submit" name="submit">Cập nhập</button>
            </form>
        <?php else: ?>
            <a href="index.php?ctl=form_dangnhap" style="color: red; font-weight: bold; font-size: 18px; text-align:center;">Vui lòng đăng nhập</a>
        <?php endif ?>
    </div>
</div>
<script src="js-admin/js_edit_danhmuc.js"></script>


<?php include_once "footer.php" ?>