<?php include_once "views_admin/header_admin.php" ?>
<div class="form-add">
    <h2>Thêm tác giả</h2>
    <form action="index.php?ctl=add_tg" method="post" enctype="multipart/form-data" id="add_tacGia">
        Tên tác giả: <input type="text" name="name_tg" id="add_tacGia_ten">
        <button type="submit">Thêm</button>
        <br>
        <span id="errorMessage" style="color: red;"></span>
    </form>
</div>
<script src="js-admin/js_add_tg.js"></script>
<?php include_once "views_admin/footer_admin.php" ?>