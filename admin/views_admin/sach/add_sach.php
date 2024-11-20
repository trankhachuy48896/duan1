<?php include_once "views_admin/header_admin.php" ?>
<div class="form-add">
    <h2>Thêm sách</h2>
    <form action="index.php?ctl=add_sach" method="post" enctype="multipart/form-data" id="add_sach">
        Tên sách: <input type="text" name="name_sp" id="add_sach_ten">
        Giá: <input type="number" name="price_sp" id="add_sach_gia" min="0">
        Số lượng: <input type="number" name="quantity_sp" id="add_sach_soLuong" min="0">
        Mô tả: <textarea name="describe_sp" id="" rows="6"></textarea>
        Ảnh: <input type="file" name="img_sp" id="add_sach_anh">
        Thuộc danh mục: <select name="id_dm" id="add_sach_danhMuc" value="0">
            <option value="0">Chọn danh mục</option>
            <?php foreach ($danhmuc as $danhmuc) : ?>
                <option value="<?= $danhmuc['id_dm'] ?>"><?= $danhmuc['name_dm'] ?></option>
            <?php endforeach ?>
        </select>
        Nhà xuất bản: <select name="id_nxb" id="add_sach_nxb" value="0">
            <option value="0">Chọn nhà xuất bản</option>
            <?php foreach ($nhaxuatban as $nhaxuatban ) : ?>
                <option value="<?= $nhaxuatban['id_nxb'] ?>"><?= $nhaxuatban['name_nxb'] ?></option>
            <?php endforeach ?>
        </select>
        Trạng thái: <br>
        <input type="radio" name="status_sp" value="0" checked id=""> Đang kinh doanh
        <input type="radio" name="status_sp" value="1" id=""> Ngừng kinh doanh <br><br>
        <button type="submit">Thêm</button>
        <br>
        <span id="errorMessage" style="color: red;"></span>
    </form>
</div>
<script src="js-admin/js_add_sach.js"></script>
<?php include_once "views_admin/footer_admin.php" ?>