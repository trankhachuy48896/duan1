<!-- admin/views_admin/danhmuc/add_danhmuc.php -->
<?php include_once "views_admin/header_admin.php" ?>
<div class="form-add">
    <h2>Thêm danh mục</h2>
    <form action="index.php?ctl=add_dm" method="post" enctype="multipart/form-data">
        Tên danh mục: <input type="text" name="name_dm" id="" required>
        Ảnh: <input type="file" name="img_dm" id="">
        Trạng thái: <br>
        <input type="radio" name="status_dm" value="0" checked id=""> Đang kinh doanh
        <input type="radio" name="status_dm" value="1" id=""> Ngừng kinh doanh <br>
        <button type="submit">Thêm</button>
    </form>
</div>

<?php include_once "views_admin/footer_admin.php" ?>