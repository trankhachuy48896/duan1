<!-- admin/views_admin/danhmuc/add_danhmuc.php -->
<?php include_once "views_admin/header_admin.php" ?>
<div class="form-add">
    <h2>Thêm danh mục</h2>
    <form action="" method="post" enctype="multipart/form-data" id="add_danhmuc">
        Tên danh mục: <input type="text" name="" id="add_tenDanhMuc" >
        Ảnh: <input type="file" name="" id="add_anhDanhMuc">
        <button type="submit">Thêm</button>
        <br>
        <span id="errorMessage" style="color: red;"></span>
    </form>
</div>
<script src="js-admin/js_add_danhmuc.js"></script>
<?php include_once "views_admin/footer_admin.php" ?>