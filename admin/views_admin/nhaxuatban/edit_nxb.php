<?php include_once "views_admin/header_admin.php" ?>
<div class="form-add">
    <h2>Cập nhập nhà xuất bản</h2>
    <form action="" method="post" enctype="multipart/form-data" id="edit_nxb">
        Tên nhà xuất bản: <input type="text" name="name_nxb" value="<?= $publisher['name_nxb'] ?>" id="edit_tenNxb">
        <input type="hidden" name="id_nxb" id="" value="<?= $publisher['id_nxb'] ?>">
        <button type="submit">Cập nhập</button>
        <br>
        <span id="errorMessage" style="color: red;"></span>
    </form>
</div>
<script src="js-admin/js_edit_nxb.js"></script>
<?php include_once "views_admin/footer_admin.php" ?>