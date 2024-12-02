<?php include_once "views_admin/header_admin.php" ?>
<div class="form-add">
    <h2>Cập nhập tài khoản</h2>
    <form action="" method="post" enctype="multipart/form-data" id="edit_taiKhoan">
        <input type="hidden" name="id_kh" id="" value="<?= $user['id_kh'] ?>">
        Trạng thái: <br> <br>
        <input type="radio" name="active" value="0" <?= $user['active'] == 0 ? 'checked' : '' ?> id=""> Đang hoạt động
        <input type="radio" name="active" value="1" <?= $user['active'] == 1 ? 'checked' : '' ?> id=""> Ngừng hoạt động
        <br><br>
        <button type="submit">Cập nhập</button>
        <br>
        <span id="errorMessage" style="color: red;"></span>
    </form>
</div>
<script src="js-admin/js_edit_tk.js"></script>
<?php include_once "views_admin/footer_admin.php" ?>