<?php include_once "views_admin/header_admin.php" ?>
<div class="form-add">
    <h2>Cập nhập danh mục</h2>
    <form action="" method="post" enctype="multipart/form-data" id="edit_danhMuc">
        Tên danh mục: <input type="text" name="" id="edit_tenDanhMuc">
        Ảnh: <input type="file" name="" id="edit_anhDanhMuc">
        <button type="submit">Cập nhập</button>
        <br>
        <span id="errorMessage" style="color: red;"></span>
    </form>
</div>
<script src="js-admin/js_edit_danhmuc.js"></script>
<?php include_once "views_admin/footer_admin.php" ?>