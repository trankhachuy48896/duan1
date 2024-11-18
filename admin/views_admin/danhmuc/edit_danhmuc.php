<?php include_once "views_admin/header_admin.php" ?>
<div class="form-add">
    <h2>Cập nhập danh mục</h2>
    <form action="" method="post" enctype="multipart/form-data">
        Tên danh mục: <input type="text" name="name_dm" value="<?= $categories['name_dm'] ?>" required>
        Ảnh: <br>
        <img src="<?= $categories['img_dm'] ?>" alt="Ảnh danh mục" width="200">
        <input type="file" name="img_dm" id="">
        <input type="hidden" name="img_dm" value="<?= $categories['img_dm'] ?>">
        <input type="hidden" name="id_dm" value="<?= $categories['id_dm'] ?>">
        Trạng thái: <br>
        <input type="radio" name="status_dm" value="0" <?= $categories['status_dm'] == 0 ? 'checked' : '' ?> id=""> Đang kinh doanh
        <input type="radio" name="status_dm" value="1" <?= $categories['status_dm'] == 1 ? 'checked' : '' ?> id=""> Ngừng kinh doanh
        <br><br>
        <button type="submit">Cập nhập</button>
    </form>
</div>

<?php include_once "views_admin/footer_admin.php" ?>