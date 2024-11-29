<?php include_once "header.php" ?>
<div class="form">
    <div class="form_login">
        <h2>Cập nhập thông tin</h2>
        <form action="index.php?ctl=update_user&id_kh=<?= $khachhang['id_kh'] ?>" method="post" enctype="multipart/form-data" id="edit_danhMuc">
            <!-- Điền giá trị hiện tại của người dùng -->
            Họ tên: <input type="text" name="name_kh" value="<?= $khachhang['name_kh'] ?>" required><br>
            Số điện thoại: <input type="text" name="phone" value="<?= $khachhang['phone'] ?>" required><br>
            Địa chỉ: <input type="text" name="address" value="<?= $khachhang['address'] ?>" required><br>
            <button type="submit" name="submit">Cập nhập</button>
        </form>
    </div>
</div>
<script src="js-admin/js_edit_danhmuc.js"></script>


<?php include_once "footer.php" ?> 