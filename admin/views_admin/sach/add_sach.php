<?php include_once "views_admin/header_admin.php" ?>
<div class="form-add">
    <h2>Thêm sách</h2>
    <form action="" method="post" enctype="multipart/form-data" id="add_sach">
        Tên sách: <input type="text" name="" id="" required>
        Giá: <input type="number" name="" id="" min="0" required>
        Số lượng: <input type="number" name="" id="" min="0" required>
        Mô tả: <textarea name="" id="" rows="6"></textarea>
        Ảnh: <input type="file" name="" id="add_sach_anh" required>
        Thuộc danh mục: <select name="" id="add_sach_danhMuc" value="0">
            <option value="0"></option>
            <option value="">Trinh thám</option>
            <option value="">Kinh dị</option>
            <option value="">Tiểu thuyết</option>
        </select>
        Nhà xuất bản: <select name="" id="add_sach_nxb" value="0">
            <option value="0"></option>
            <option value="1">Kim Đồng</option>
            <option value="2">Ngôi Sao</option>
            <option value="3">Tự truyện</option>
        </select>
        <button type="submit">Thêm</button>
        <br>
        <span id="errorMessage" style="color: red;"></span>
    </form>
</div>
<script src="js-admin/js_add_sach.js"></script>
<?php include_once "views_admin/footer_admin.php" ?>