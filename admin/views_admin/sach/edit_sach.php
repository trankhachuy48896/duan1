<?php include_once "views_admin/header_admin.php" ?>
<div class="form-add">
    <h2>Cập nhập sách</h2>
    <form action="" method="post" enctype="multipart/form-data" id="edit_sach">
        Tên sách: <input type="text" name="name_sp" id="edit_sach_ten" value="<?= $product['name_sp'] ?>">
        Giá: <input type="number" name="price_sp" id="edit_sach_gia" min="0" value="<?= $product['price_sp'] ?>">
        Số lượng: <input type="number" name="quantity_sp" id="edit_sach_soLuong" min="0" value="<?= $product['quantity_sp'] ?>">
        Mô tả: <textarea name="describe_sp" id="" rows="6"><?= $product['describe_sp'] ?></textarea>
        Ảnh: <img src="<?= $product['img_sp'] ?>" alt="Ảnh sản phẩm" width="200"> <br>
        <input type="file" name="img_sp" id="edit_sach_anh">
        <input type="hidden" name="img_sp" value="<?= $product['img_sp'] ?>">
        <input type="hidden" name="id_sp" value="<?= $product['id_sp'] ?>">
        Thuộc danh mục: <select name="id_dm" id="edit_sach_danhMuc" value="0">
            <option value="0">Lựa chọn</option>
            <?php foreach ($category as $dm) : ?>
                <option value="<?= $dm['id_dm'] ?>"
                    <?= ($dm['id_dm'] == $product['id_dm'] ? 'selected' : '') ?>>
                    <?= htmlspecialchars($dm['name_dm']) ?>
                </option>
            <?php endforeach; ?>
        </select>
        Nhà xuất bản: <select name="id_nxb" id="edit_sach_nxb" value="0">
            <option value="0">Lựa chọn</option>
            <?php foreach ($nhaxuatban as $nxb) : ?>
                <option value="<?= $nxb['id_nxb'] ?>" <?= $nxb['id_nxb'] == $product['id_nxb'] ? 'selected' : '' ?>>
                    <?= $nxb['name_nxb'] ?>
                </option>
            <?php endforeach; ?>
        </select>
        Trạng thái: <br>
        <input type="radio" name="status_sp" value="0" <?= $product['status_sp'] == 0 ? 'checked' : '' ?> id=""> Đang kinh doanh
        <input type="radio" name="status_sp" value="1" <?= $product['status_sp'] == 1 ? 'checked' : '' ?> id=""> Ngừng kinh doanh
        <br><br>
        <button type="submit">Cập nhập</button>
        <br>
        <span id="errorMessage" style="color: red;"></span>
    </form>
</div>
<script src="js-admin/js_edit_sach.js"></script>
<?php include_once "views_admin/footer_admin.php" ?>