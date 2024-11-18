<?php include_once "views_admin/header_admin.php" ?>
<div class="form-add">
    <h2>Cập nhập tác giả</h2>
    <form action="" method="post" enctype="multipart/form-data" id="edit_tacGia">
        Tên tác giả: <input type="text" name="" id="edit_tacGia_ten">
        <button type="submit">Cập nhập</button>
        <br>
        <span id="errorMessage" style="color: red;"></span>
    </form>
</div>
<script src="js-admin/js_edit_tg.js"></script>
<?php include_once "views_admin/footer_admin.php" ?>